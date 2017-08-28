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

Route::resource('posts', 'PostsController');

Route::get('/', 'HomeController@showWelcome');

Route::get('lowercase/{string}', 'HomeController@lowercase');

Route::get('/uppercase/{string}', 'HomeController@uppercase');

Route::get('/increment/{number}', 'HomeController@incrementNumber');

Route::get('add/{number?}/{othernumber?}', 'HomeController@addNumber');

Route::get('zero', 'HomeController@resetToZero');

Route::get('/rolldice/{guess}', 'HomeController@rollDice');
