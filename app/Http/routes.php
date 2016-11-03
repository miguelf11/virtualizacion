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
//Route::resource('manage_carreras', '');
*/

Route::resource('prueba','CursoController@prueba');
Route::resource('backdoor', 'BackdoorController');


Route::resource('/', 'IndexController');
Route::get('/principal', 'IndexController@principal');
Route::resource('logout', 'IndexController@logout');

Route::resource('admin', 'UserController');

Route::resource('carrera','CarreraController');

Route::resource('cargo','CargoController');

Route::any('/curso/add', array('as'=>'addCurso', 'uses'=>'CursoController@addCurso'));
Route::get('/curso/materia', array('as'=>'getMat', 'uses'=>'CursoController@getMat'));
Route::resource('curso','CursoController');


Route::get('/{user_id}/worker', 'WorkerController@index');


//Route::get('/{user_id}/manager', 'ManagerController@index');
//Route::get('/{user_id}/director', 'DirectorController@index');
