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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Application routes...
Route::get('/', ['middleware' => 'auth', 'uses' => 'VideosController@index']);
Route::get('/videos', 'VideosController@index');
Route::get('/video/show/{id}', 'VideosController@show');
Route::get('/video/upvote/{id}', 'VideosController@upvote');
Route::get('/video/upload', 'VideosController@create');
Route::post('/video/upload', 'VideosController@store');