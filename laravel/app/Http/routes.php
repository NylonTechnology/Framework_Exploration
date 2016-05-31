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




Route::bind('contacts', function($value, $route) {
	return App\Contact::whereId($value)->first();
});
Route::bind('offices', function($value, $route) {
	return App\Office::whereId($value)->first();
});

Route::resource('contacts', 'ContactsController');
Route::resource('offices', 'OfficesController');


