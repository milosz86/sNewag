<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/





Route::group(['middleware' => ['auth', 'admin']], function () {

Route::get('/', function() {return View('welcome'); });

 });

Auth::routes();
Route::resource('/services', 'ServiceController');

Route::get('/home', 'HomeController@index');
