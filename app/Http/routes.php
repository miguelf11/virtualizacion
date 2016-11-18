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

Route::resource('backdoor', 'BackdoorController');


Route::resource('/', 'IndexController');
Route::get('/recuperar-contraseña', 'IndexController@recover_psw'); 
Route::get('/principal', 'IndexController@principal');
Route::resource('logout', 'IndexController@logout');



Route::get('/sendpassword','UserController@send_psw'); 
Route::resource('admin', 'UserController');

Route::resource('carrera','CarreraController');

Route::resource('cargo','CargoController');

Route::resource('leccion','LeccionController');

Route::any('/curso/add', array('as'=>'addCurso', 'uses'=>'CursoController@addCurso'));
Route::any('curso/delete',array('as'=>'rmCurso','uses'=> 'CursoController@rmCurso'));
Route::get('/curso/materia', array('as'=>'getMat', 'uses'=>'CursoController@getMat'));
Route::resource('curso','CursoController');


Route::get('/worker/{user_id}', 'WorkerController@index');
Route::get('/manager/{user_id}', 'ManagerController@index');
//Route::get('/director/{user_id}', 'DirectorController@index');
//Route::get('/expert/{user_id}', 'ExpertController@index');


get('/test-email', function() {
    Mail::send("emails.prueba", [], function($message) {
        $message->to("miguelachof11@gmail.com", "Miguel")
        ->subject("Bienvenido a Aprendible!");
    });
});