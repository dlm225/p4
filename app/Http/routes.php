<?php

Route::group(['middleware' => ['web']], function () {
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
//    Route::get('/login', 'LoginController@login');
    Route::post('/join', 'ProfileController@join');
    Route::get('/about', 'HomeController@about');
    Route::get('/leaderboard', 'MoreController@getLeaderboard');
    Route::get('/profile', 'ProfileController@getProfile');
    Route::get('/home', 'HomeController@home');

    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/logout', 'Auth\AuthController@logout');
    Route::get('/register', 'Auth\AuthController@getRegister');
    Route::post('/register', 'Auth\AuthController@postRegister');

});
