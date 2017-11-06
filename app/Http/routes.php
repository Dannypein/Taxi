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

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);
Route::get('home', 'WelcomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*----Rutas de inicio de sesion de usuario normal y admin----*/

Route::get('/desktop', 'AdminController@index');

Route::get('/admin', 'AdminController@admin');
