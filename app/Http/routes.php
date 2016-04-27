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

Route::get('/', 'HomeController@getIndex');
Route::get('/home', 'HomeController@home');
Route::get('/about', 'HomeController@about');

Route::get('/leaderboard', 'MoreController@getLeaderboard');

Route::get('/profile', 'ProfileController@getProfile');
Route::get('/profileupdate', 'ProfileController@getProfileUpdate');



/*
|-------------------------------------
| Authentication routes
|-------------------------------------
*/

# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');
# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');
# Process logout
Route::get('/logout', 'Auth\AuthController@logout');
# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');
# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');
