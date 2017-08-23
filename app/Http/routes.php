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

Route::get('/', 'HomeController@showWelcome');

Route::get('/uppercase/{string}', function($string){
	$uppercase = strtoupper($string);
	$data = array("uppercase" => $uppercase, "string" => $string);
	return view('uppercase', $data);
});

Route::get('/increment/{number}', function($number){
	$increment = $number + 1;
	$data = array("increment" => $increment);
	return view('increment', $data);
});

Route::get('add/{number?}/{othernumber?}', function($number = 0, $othernumber = 0){
	return $number + $othernumber;
});

Route::get('/rolldice/{guess}', function($guess){
	$random = rand(1, 6);
	if ($random == $guess) {
		$response = "You guessed it!".PHP_EOL;
	} else {
		$response = "Try again!".PHP_EOL;
	}
	$data = array('random' => $random, 'guess' => $guess, 'response' => $response);
	return view('roll-dice', $data);
});