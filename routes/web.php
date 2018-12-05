<?php

Auth::routes();

/*------------------------ Vistas estaticas y publicas ----------------------------------*/

Route::view('/','vistasPublicas.index')->name('index');

Route::view('/contacto','vistasPublicas.contacto')->name('contacto');

Route::view('/calendario','vistasPublicas.calendario')->name('calendario');

Route::view('/reglamento','vistasPublicas.reglamento')->name('reglamento');

Route::view('/UbicaionC','vistasPublicas.UbicacionC')->name('ubicacion');

/*------------------------ Vistas dinamicas Delegados----------------------------------*/

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/HistorialReservas','HomeController@HistorialReservas')->name('HistorialReservas');

    Route::get('/home', 'HomeController@index')->name('home'); // vista reserva delegado

    Route::get('json-canchas/{idComplejoDeportivo}','HomeController@canchas');

    Route::get('json-bloquesHorarios/{fechaSolicitada}/{idComplejoDeportivo}','HomeController@bloquesHorarios');

    Route::get('/infoDelegado','HomeController@infoDelegado')->name('infoDelegado');


});

/*------------------------ Vistas dinamicas Administrador----------------------------------*/

Route::group(['middleware' => 'adminMiddleware'], function () {

    Route::get('/perfiladministrador','AdministradorController@Perfil')->name('perfiladministrador');

    Route::get('/gestioncancha','AdministradorController@canchas')->name('gestioncancha');
    Route::get('/gestioninformacion','AdministradorController@informacion')->name('gestioninformacion');
    Route::get('/porcentajeuso','AdministradorController@porcentajeuso')->name('porcentajeuso');
    Route::get('/perfiladministrador/agregarcancha','AdministradorController@agregarcancha')->name('agregarcancha');
    Route::get('/perfiladministrador/modificarcancha','AdministradorController@agregarcancha')->name('modificarcancha');
    Route::get('/perfiladministrador/eliminarcancha','AdministradorController@agregarcancha')->name('eliminarcancha');

    Route::get('/gestiondelegado/eliminardelegado','AdministradorController@eliminardelegado')->name('eliminardelegado');
    Route::get('/gestiondelegado/modificardelegado','AdministradorController@modificardelegado')->name('modificardelegado');
    Route::get('/gestiondelegado/eliminardelegado','AdministradorController@eliminardelegado')->name('eliminardelegado');
    Route::get('/gestioninformacion/agregarreglamento','AdministradorController@informacion')->name('agregarreglamento');
    Route::get('/gestioninformacion/modificarreglamento','AdministradorController@informacion')->name('modificarreglamento');

    //LO miooo
    Route::get('/gestiondelegado/creardelegado','AdministradorController@creardelegado')->name('creardelegado');
    Route::get('editardelegado','AdministradorController@actualizardelegado')->name('vistaAdministrador.editardelegado');
    Route::post(('/createdelegado') , 'AdministradorController@agregardelegado')->name('createdelegado');
    Route::post(('/editardelegado'),'AdministradorController@update1')->name('vistaAdministrador.actualizardelegado');
    Route::get('/listadelegado','AdministradorController@listadelegado')->name('listadelegado');

    //eliminar
    Route::get(('listadelegado/{id}'), 'AdministradorController@destroye1')->name('delete.eliminardelegado');

});
