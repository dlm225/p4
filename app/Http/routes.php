<?php

/* General routes - logged in or not   */
Route::get('/', 'HomeController@getIndex');
Route::get('/about', 'HomeController@about');
Route::get('/leaderboard', 'MoreController@getLeaderboard');
Route::get('/study', 'MoreController@study');
Route::get('/howto', 'MoreController@howToPlay');

/* General routes - user must be logged in - Auth middleware Route::group used  */
Route::group(['middleware' => 'auth'], function() {

    /* General game play - gameboard and questions   */
    Route::get('/play', 'GameController@play');
    Route::get('/gameboard/{id?}', 'GameController@getGameboardByCategory');
    Route::get('/question/{id?}', 'GameController@getQuestion');
    Route::post('/question/{id?}', 'GameController@postFlag');
    Route::get('/hint1/{id?}', 'GameController@setHint1Used');
    Route::get('/hint2/{id?}', 'GameController@setHint2Used');

    /* Profile routes - including password change   */
    Route::get('/profile', 'ProfileController@getProfile');
    Route::get('/profileupdate', 'ProfileController@getProfileUpdate');
    Route::post('/profileupdate', 'ProfileController@postProfileUpdate');
    Route::get('/passwordupdate', 'ProfileController@getPasswordUpdate');
    Route::post('/passwordupdate', 'ProfileController@postPasswordUpdate');
    Route::get('/history', 'ProfileController@getHistory');

    /* Create new quesiton routes   */
    Route::get('/create', 'GameController@getCreateQuestion');
    Route::post('/create', 'GameController@postCreateQuestion');
    Route::get('/questionsubmitted', 'GameController@questionSubmitted');

    /* Routes to administer users and questions   */
    Route::get('/administrateusers', 'AdminController@getUserlist');
    Route::get('/deleteuser/{id?}', 'AdminController@getDeleteUser');
    Route::get('/deleteconfirmed/{id?}', 'AdminController@getDeleteConfirmed');
    Route::get('/promoteuser/{id?}', 'AdminController@promoteUser');
    Route::get('/demoteuser/{id?}', 'AdminController@demoteUser');

    Route::get('/administratequestions', 'AdminController@getAllQuestions');
    Route::get('/deletequestion/{id?}', 'AdminController@getDeleteQuestion');
    Route::get('/deletequestionconfirmed/{id?}', 'AdminController@getDeletedQuestionConfirmed');
    Route::get('/editquestion/{id?}', 'AdminController@getEditQuestion');
    Route::post('/editquestion/{id?}', 'AdminController@postEditQuestion');
});

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
