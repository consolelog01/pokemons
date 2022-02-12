<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemons/especies/acuaticos', function(){
    
    $nombre = 'SQUIRTLE';
    $descripcion = 'El caparazón de Squirtle no le sirve de protección únicamente. Su forma redondeada y las hendiduras que tiene le ayudan a deslizarse en el agua y le permiten nadar a gran velocidad. Lanza agua a su presa desde el agua. Se esconde en su concha cuando se siente en peligro. Se protege con su caparazón y luego contraataca lanzando agua a presión cuando tiene oportunidad.';
    
    return view(
        'pokemons.especiesAcuaticas', 
        [
            'nombre'=>$nombre, 
            'descripcion'=>$descripcion
        ]
    );

});

return View::make('pokemons.especiesAcuaticas', ['nombre' => 'Juan', 'apellidos' => "Gomez Perez"])->with('name', 'Victoria');