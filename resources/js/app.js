/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('card-informacion-pokemon', require('./components/cardInformacionPokemon.vue').default);
const cardInformacionPokemon = new Vue({ el: '#card-informacion-pokemon' });

console.log( cardInformacionPokemon );

// Dependencias
import 'bootstrap/dist/js/bootstrap.min.js';
import 'jquery/dist/jquery.min.js';