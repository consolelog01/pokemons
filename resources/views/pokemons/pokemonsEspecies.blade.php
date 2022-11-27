<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:url"
        content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pokemons Cards" />
    <meta property="og:description" content="Cards de pokemons aleatorios" />
    <meta property="og:image"
        content="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/home/4.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista - Pokemons</title>
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <link href="{{ asset('css/estilosappsitioweb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilosPersonalizados.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilosCards.css') }}" rel="stylesheet">
</head>

<body>
    <main>
        <section
            class="d-flex justify-content-center align-items-center p-a top-0-p-a bottom-0-p-a rigth-0-p-a left-0-p-a">
            <article id="card-informacion-pokemon">
                <card-informacion-pokemon></card-informacion-pokemon>
            </article>
        </section>
    </main>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>

</html>
