<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------ Vistas estaticas ----------------------------------*/

Route::view('/','vistasPublicas.index')->name('index');

Route::view('/contacto','vistasPublicas.contacto')->name('contacto');

Route::view('/calendario','vistasPublicas.calendario')->name('calendario');

Route::view('/reglamento','vistasPublicas.reglamento')->name('reglamento');

Route::view('/UbicaionC','vistasPublicas.UbicacionC')->name('ubicacion');

/*------------------------ Vistas dinamicas ----------------------------------*/

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/reserva','reserva')->name('reserva');

Route::view('/welcome','welcome')->name('Laravel');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
