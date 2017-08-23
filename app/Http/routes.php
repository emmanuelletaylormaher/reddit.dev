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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uppercase/{string}', function($string){
	return strtoupper($string);
});

Route::get('/increment/{number}', function($number){
	return $number + 1;
});

Route::get('add/{number?}/{othernumber?}', function($number = 0, $othernumber = 0){
	return $number + $othernumber;
});