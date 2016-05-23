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

Route::get('/Administration', 'Administration@index');
Route::get('/Dashboard', 'Dashboard@index');

Route::get('/blade', function () {
    return view('Page',array('var' => 'some varriable'));
});

Route::get('/Test', 'Test@index');
