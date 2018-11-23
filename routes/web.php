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

/*------------------------ Vistas administrador ----------------------------------*/


Route::get('/perfiladministrador','AdministradorController@Perfil')->name('perfiladministrador');
Route::get('/gestiondelegado','AdministradorController@delegado')->name('gestiondelegado');
Route::get('/gestioncancha','AdministradorController@canchas')->name('gestioncancha');
Route::get('/gestioninformacion','AdministradorController@informacion')->name('gestioninformacion');
Route::get('/porcentajeuso','AdministradorController@porcentajeuso')->name('porcentajeuso');
Route::get('/perfiladministrador/agregarcancha','AdministradorController@agregarcancha')->name('agregarcancha');
Route::get('/perfiladministrador/modificarcancha','AdministradorController@agregarcancha')->name('modificarcancha');
Route::get('/perfiladministrador/eliminarcancha','AdministradorController@agregarcancha')->name('eliminarcancha');
Route::get('/gestiondelegado/agregardelegado','AdministradorController@agregardelegado')->name('agregardelegado');
Route::get('/gestiondelegado/modificardelegado','AdministradorController@modificardelegado')->name('modificardelegado');
Route::get('/gestiondelegado/eliminardelegado','AdministradorController@eliminardelegado')->name('eliminardelegado');
Route::get('/gestioninformacion/agregarreglamento','AdministradorController@informacion')->name('agregarreglamento');
Route::get('/gestioninformacion/modificarreglamento','AdministradorController@informacion')->name('modificarreglamento');
Route::get('/creardelegado','AdministradorController@creardelegado')->name('creardelegado');
// segun el otro
Route::get('adding_to_table', function()
{
    return View::make('creardelegado');
});

Route::post('adding_to_table', function()
{
    DB::table('user_info')->insert(
        array(
            
              "email" => Input::get("email"),
              "name" => Input::get("name"),
              "password" => Input::get("password"),
        )
    );
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
