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
    Route::get('/home','AdministradorController@irperfil');
    Route::get('/infoDelegado','HomeController@infoDelegado')->name('infoDelegado');
    

        Route::get('editarperfildelegado','AdministradorController@actualizarperfil')->name('vistasDelegados.editardelegado');
        Route::post(('/editarperfildelegado'),'AdministradorController@update2')->name('vistasDelegados.actualizardelegado');
});

/*------------------------ Vistas dinamicas Administrador----------------------------------*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('/perfiladministrador','AdministradorController@Perfil')->name('perfiladministrador');
    
    Route::get('/gestioncancha','AdministradorController@canchas')->name('gestioncancha');
    Route::get('/gestioninformacion','AdministradorController@informacion')->name('gestioninformacion');
    Route::get('/porcentajeuso','AdministradorController@porcentajeuso')->name('porcentajeuso');
    Route::get('/perfiladministrador/agregarcancha','AdministradorController@agregarcancha')->name('agregarcancha');
    Route::get('/perfiladministrador/modificarcancha','AdministradorController@agregarcancha')->name('modificarcancha');
    Route::get('/perfiladministrador/eliminarcancha','AdministradorController@agregarcancha')->name('eliminarcancha');

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

    //Redireccionamiento
    Route::get('/admin','AdministradorController@irperfil');
    
//con dieguito
Route::get('/gestioncomplejodeportivo','ComplejoController@complejo')->name('gestioncomplejodeportivo1');
Route::get('gestioncomplejodeportivo','ComplejoController@listacomplejo')->name('gestioncomplejodeportivo');
Route::post(('/editarcomplejos'),'ComplejoController@updatecomplejo')->name('vistaAdministrador.actualizarcomplejo');
Route::get('editarcomplejos','ComplejoController@actualizarcomplejo')->name('vistaAdministrador.editarcomplejos');
Route::get('/gestioncomplejodeportivo/crearnuevocomplejo','ComplejoController@crearcomplejo')->name('crearnuevocomplejo');
Route::post(('/createcomplejo') , 'ComplejoController@agregarcomplejo')->name('createcomplejo');
Route::get(('gestioncomplejodeportivo/{id}'), 'ComplejoController@destroyecomplejo')->name('delete.eliminarcomplejo');

//Canchas
    Route::get('/listacanchas','AdministradorController@listaCanchas')->name('listacanchas');
    Route::get('/crearcancha','AdministradorController@crearCancha')->name('crearcancha');
    Route::post(('/agregarcancha'),'AdministradorController@agregarCanchaBD')->name('agregarCancha');
   
    Route::get('editarcancha','AdministradorController@editarCancha')->name('vistaAdmin.editarcancha');
    Route::post(('/editarcanchaBD'),'AdministradorController@editarCanchaBD')->name('vistaAdmin.editarcanchabd');
    Route::get(('listacancha/{id}'), 'AdministradorController@destroyeCancha')->name('delete.eliminarcancha');
//Horario
    Route::get('listahorarios','AdministradorController@listaHorarios')->name('listahorarios');
    Route::get('/crearhorario','AdministradorController@crearhorario')->name('crearhorario');
    Route::post(('agregarhorario'),'AdministradorController@agregarhorario')->name('agregarhorario');
});
