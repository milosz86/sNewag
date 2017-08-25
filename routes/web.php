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





Route::resource('/services' , 'ServiceController');
Route::any('profile' , 'ProfileController@show');
Route::resource('parts', 'PartController');
Route::resource('vehicles', 'VehicleController');
Route::resource('shipments', 'ShipmentController');
Route::resource('cars', 'CarController');
Route::get('/', function() {return View('welcome'); });
Route::get('stock', 'StockController@index');
Auth::routes();
