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

Route::resource('/', 'IndexController');
Route::get('/principal', 'IndexController@principal');
Route::resource('logout', 'IndexController@logout');


Route::resource('admin', 'UserController');

Route::resource('backdoor', 'BackdoorController');

