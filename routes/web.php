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

// Route::get('saludo/{nombre}', function ($nombre) {
//     return "Saludos ".$nombre;
// });
// Route::get('contacto', function () {
//     return "Zona de contactos";
// })->name('Contacto');
// Route::get('/', function () {
// echo "<a href ="{/*.route('Contacto')*/}">Contacto 1 </a><br>";
// echo "<a href ="{/*.route('Contacto')*/}">Contacto 2 </a><br>";
// echo "<a href ="{/*.route('Contacto')*/}">Contacto 3 </a><br>";
// });
// Route::get('/', function () {
//     $nombre = "Melva";
//     return view('home')->with('nombre', $nombre);
// })-> name('home');

Route::view('/', 'home')->name('home');
Route::view('/acerca', 'acerca')->name('acerca');

Route::get('/Portafolio', 'ejemploControllerr')->name('Portafolio');
Route::view('/contactos', 'contactos')-> name('contactos');
//Route::post('Contacto', 'messController@store')->name('Contacto');
