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

// HomeController routes
Route::get('/', 'HomeController@showWelcome');
Route::get('/home', 'HomeController@showWelcome');
Route::get('lowercase/{string}', 'HomeController@lowercase');
Route::get('/uppercase/{string}', 'HomeController@uppercase');
Route::get('/increment/{number}', 'HomeController@incrementNumber');
Route::get('add/{number?}/{othernumber?}', 'HomeController@addNumber');
Route::get('zero', 'HomeController@resetToZero');
Route::get('/rolldice/{guess}', 'HomeController@rollDice');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/builder', 'PostsController@testBuilder');


Route::get('orm-test', function(){
	// $post1 = new \App\Models\Post();
	// $post1->title = 'Eloquent is awesome!';
	// $post1->url='https://laravel.com/docs/5.1/eloquent';
	// $post1->content  = 'It is super easy to create a new post.';
	// $post1->created_by = 1;
	// $post1->save();

	// $post2 = new \App\Models\Post();
	// $post2->title = 'Eloquent is really easy!';
	// $post2->url='https://laravel.com/docs/5.1/eloquent';
	// $post2->content = 'It is super easy to create a new post.';
	// $post2->created_by = 2;
	// $post2->save();

	$posts = \App\Models\Post::All();
	return $posts;
});