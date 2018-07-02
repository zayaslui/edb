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
    return "hola";
});

/*simple*/
Route::get('foo', function () {
    return 'Hello World';
});
/*con parametros*/
Route::get('nombre/{nombre}',function($nombre){
	return "Mi nombre es ".$nombre;
});
/*Edad*/
Route::get('edad/{edad}',function($edad){
	return "Mi edad es ".$edad;
});
Route::get('edad2/{edad2?}',function($edad=null){
	return "Mi edad es ".$edad;
});

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::get('apellido/{apellido}','PruebaController@apellido');
Route::resource('movie','MovieController');