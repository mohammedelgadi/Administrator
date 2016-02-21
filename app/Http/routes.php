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

Route::get('home',['middleware' => 'auth' , function(){
	return 'Welcome home '.Auth::user()->name;
}]);

Route::get('map',['middleware' => 'auth' , 'uses' => 'MapController@index']);

Route::get('form',['middleware' => 'auth' , 'uses' => 'MapController@addFormatteur']);



Route::get('login', function () {
    return view('auth/log');
});



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
Route::get('map', function () {
    return View::make('map');
});
*/