<template>
    <article class="card-sye p-r">
        <article class="wait-process">
            <div class="container_pokebola">
                <poke-bola></poke-bola>
            </div>
        </article>
        <div class="header-card d-flex justify-content-center align-items-center">
            <span>{{nombrePokemon}}</span>
        </div>
        <div class="container-card p-r d-flex justify-content-center">
            <img v-bind:src="imagen" v-bind:alt="nombrePokemon">
        </div>
        <div class="footer-card d-flex justify-content-center">
            <button 
            class="btnAction btnPrevius"
            v-on:click="previus">&lt;&lt;Previus</button>
            <button 
            class="btnAction btnNext"
            v-on:click="next">Next&gt;&gt;</button>
        </div>
    </article>
</template>

<script>
    
    // ---- Importación de componentes.
    import pokebola from './pokebola';

    export default {

        // --- Componentes a agregar
        components: {
            'poke-bola': pokebola
        },

        // --- Nombre del componente
        name: "card-informacion-pokemon",

        // --- Información principal
        data: function() {
            return {
                nombrePokemon: "bulbasaur",
                nombrePokemonAux: "bulbasaur",
                imagen: "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/home/1.png",
                count: 0,
            };
        },

        // Métodos
        methods: {
            
            next: function() {

                // `this` dentro de los métodos apunta a la instancia de Vue
                //console.log('>>' + this.nombrePokemon + '!');
                this.count = this.count+1;
                console.log(this.count);

                // --- Se obtiene la información del pokemon / petición a la API correspondiente.
                this.getAPIpokeapi();

            },

            previus: function() {

                //console.log('<<' + this.nombrePokemon + '!');
                this.count = this.count-1;
                if ( this.count < 0 ) {
                    this.count = 0;
                }
                
                console.log(this.count);

                // --- Se obtiene la información del pokemon / petición a la API correspondiente.
                this.getAPIpokeapi();
                
            },

            getAPIpokeapi: function( tipoURL = 1, url = "" ) {

                let contextoComponente = this;
                let indexPokemon = this.count;
                console.log(indexPokemon);
                
                // --- Se agrega la clase del elemento de carga.
                let waitProcess = this.$el.firstChild; 
                waitProcess.className = "wait-process";
                let container_pokebola = document.querySelector(".container_pokebola");
                container_pokebola.classList.add("w-100");
                let circle_main = document.querySelector(".circle_main");
                circle_main.classList.remove("animation-none");
                circle_main.classList.add("circle_main-animation-active");

                if ( tipoURL == 1 ) {
                    var urlAPI = 'https://pokeapi.co/api/v2/pokemon/?offset='+indexPokemon+'&limit=1';
                } else {
                    var urlAPI = url;
                }

                axios({

                    method: 'get',
                    url: urlAPI,
                    responseType: 'json'

                })
                .then(function (response) {

                    // this.info = response;
                        
                    if ( tipoURL == 1 ) {

                        let results = response.data.results;
                        console.log( results );

                        let _url = results[0].url;
                        console.log(_url);
                        contextoComponente.getAPIpokeapi(2, _url);

                        // ---- Se actualiza la información de las propiedades del componente.
                        contextoComponente.nombrePokemonAux = results[0].name;

                    } else {

                        let imagePokemon = response.data.sprites.other.home.front_default;
                        console.log(urlAPI, response, imagePokemon);

                        // ---- Se actualiza la información de las propiedades del componente.
                        contextoComponente.imagen = imagePokemon;
                        contextoComponente.nombrePokemon = contextoComponente.nombrePokemonAux;

                        // --- Se quita la clase del elemento de carga.
                        waitProcess.removeAttribute("class");
                        container_pokebola.classList.remove("w-100");
                        circle_main.classList.add("animation-none");
                        circle_main.classList.remove("circle_main-animation-active");
                        
                    }

                    console.log("OK sigue...");

                })
                .catch(error => console.log(error));

            }

            
            
        },

        // --- Consumo de API {{pokeapi}}
        mounted: function() {

            // Código que se ejecutará solo después de
            // haber renderizado la vista completa
            this.$nextTick(function () {
                let waitProcess = this.$el.firstChild; 
                // --- Se quita la clase del elemento de carga.
                waitProcess.removeAttribute("class");
            });

        },

    }

</script>
