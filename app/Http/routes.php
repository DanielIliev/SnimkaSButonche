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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function() {
	return view('home');
})->name('home');

Route::get('/sales', function() {
	return view('sales');
})->name('sales');

Route::get('/loans', function() {
	return view('loans');
})->name('loans');

Route::get('/additional', function() {
	return view('additionalInfo');
})->name('more_info');

Route::get('/contact', function() {
	return view('contact');
})->name('contact');

Route::get('/Administration', 'Administration@index');
Route::get('/Administration/Registration', 'Registration@Create')->name('register');
Route::post('/Administration/Registration/Store', 'Registration@Store');
Route::get('/Administration/Registration/Success', 'Registration@Success');

Route::get('/User/ChangePassword','User@ChangePassword');
Route::post('/User/StorePassword','User@StoreNewPassword');
Route::get('/User/PasswordChangeSuccess', 'User@PasswordChangeSuccess');

Route::get('/Login','User@Login');
Route::post('/Authenticate','User@Authenticate');


Route::get('/Dashboard', 'Dashboard@index');
Route::get('/Dashboard/Tenants', 'Dashboard@Tenants');


Route::get('/blade', function () {
    return view('Page',array('var' => 'some varriable'));
});

Route::get('/Test', 'Test@index');

