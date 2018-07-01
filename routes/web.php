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

/*paginas*/

Route::get('/','FrontController@index');
Route::get('plans','FrontController@plans');
Route::get('services','FrontController@services');
Route::get('about','FrontController@about');
Route::get('contact','FrontController@contact');
Route::get('admin','FrontController@admin');



// Route::resource('usuario','UsuarioController');
// Route::resource('genero','GeneroController');

Route::resources([
	'usuario' => 'UsuarioController',
	'genero' => 'GeneroController',
	'peliculas'=>'PeliculasController',
	'obras' => 'ObrasController'
]);

// ajax
Route::post('listarObras','ObrasController@listar');
Route::post('little','ObrasController@little_obras');

// erroes
Route::get ('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);
Route::get ('405', ['as' => '405', 'uses' => 'ErrorHandlerController@errorCode405']);