<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('controlador', 'PruebaController@index');
Route::get('ControladorName/{nombre}', 'PruebaController@nombre');

Route::resource('Academico','AcademicoController');

Route::get('prueba', function(){
return "Hola desde php";});

Route::get('Nombre/{Nombre}', function($Nombre){
return "Hola yo me llamo: " .$Nombre;});

Route::get('nombre/{Nombre?}', function($Nombre = 'Jhon'){
return "Hola yo me llamo: " .$Nombre;});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
