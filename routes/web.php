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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('base','BaseController');

Route::group(['prefix' => 'config'], function() {

    //Roles
    Route::resource('roles','RolController');

    //Paquetes
    Route::resource('paquetes','PaqueteController');

    //Modulos
    Route::resource('modulos','ModuloController');

    //Permisos
    Route::resource('permisos','PermisoController');

});

Route::group(['prefix' => 'basicos'], function() {

    //Usuarios
    Route::resource('usuarios','UsuarioController');

    //Paises
    Route::resource('paises','PaisController');

    //Departamentos
    Route::resource('departamentos','DepartamentoController');

    //Ciudades
    Route::resource('ciudades','CiudadController');

    //Ajax
    Route::post('ajaxCiudadesPais', 'CiudadController@ajaxCiudadesPais')->name('basicos.ajaxCiudadesPais');

    //Tipo Maestro
    Route::resource('tiposmaestro','TipoMaestroController');

    //Tipo Maestro Item
    Route::resource('tiposmaestroitem','TipoMaestroItemController');

});
