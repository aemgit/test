<?php

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
//ruta para mostrar la lista de hoteles
Route::resource('hotel', 'hotelcontroller');
//ruta para mostrar en detalle un hotel determinado 
Route::get('hotel/{id}/', 'hotel@show');
Route::resource('hotel/{id}/', 'hotelcontroller');
//ruta para mostrar en detalle una habitacion de un hotel determinado
Route::get('hotel/{id}/room/{id_habitacion}/', 'hotelcontroller@tax');
//Route::resource('hotel/{id}/room/{id_habitacion}', 'hotelcontroller');


