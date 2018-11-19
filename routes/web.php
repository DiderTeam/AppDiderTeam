<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------ Vistas estaticas y publicas ----------------------------------*/

Route::view('/','vistasPublicas.index')->name('index');

Route::view('/contacto','vistasPublicas.contacto')->name('contacto');

Route::view('/calendario','vistasPublicas.calendario')->name('calendario');

Route::view('/reglamento','vistasPublicas.reglamento')->name('reglamento');

Route::view('/UbicaionC','vistasPublicas.UbicacionC')->name('ubicacion');

/*------------------------ Vistas dinamicas Delegados----------------------------------*/

Route::group(['middleware' => 'auth'], function () {

    //Route::resource('/ComplejosDeportivos','ComplejosDeportivosController');

    Route::get('/ComplejosDeportivos', 'Complejodepot@index')->name('ComplejosDeportivos');

    Route::get('/home', 'HomeController@index')->name('home'); // vista reserva delegado

    Route::get('/infoDelegado','HomeController@infoDelegado')->name('infoDelegado');

    Route::get('/HistorialReservas','HomeController@HistorialReservas')->name('HistorialReservas');

});

/*------------------------ Vistas dinamicas Administrador----------------------------------*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('/Admin','HomeController@VistaAdmin')->name('VistaAdmin');

});



//Route::view('/welcome','welcome')->name('Laravel'); //vista laravel default