<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'MainController@index');

    Route::get('about', 'StaticPagesController@about');
    Route::get('about/team', 'StaticPagesController@aboutteam');

    /*
    Route::get('anime', 'AnimeController@index');
    Route::get('anime/add', 'AnimeController@create');
    Route::get('anime/{id}', 'AnimeController@detail');

    Route::post('anime', 'AnimeController@store');
    */

    Route::resource('anime', 'AnimeController');

    Route::controllers([
        'auth'      =>  'Auth\AuthController',
        'password'  =>  'Auth\PasswordController',
    ]);

    // Nutzer
    Route::get('user/logout', 'ProfileController@logout');
    Route::get('user/dashboard', 'ProfileController@dashboard');
    Route::get('user/profile/list/{username}', 'ProfileController@animelist');
    Route::get('user/profile/list/', 'ProfileController@useranimelist');
    Route::get('user/profile/getlist', 'ProfileController@getList');
    Route::get('user/profile/createlist', 'ProfileController@createList');
});
