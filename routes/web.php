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


Route::get('/', ['middleware' => ['auth', 'admin'], function() {
    return "Jesteś zalogowany jako Admin";
}]);


Route::group(['middleware' => ['auth', 'admin']], function () {

       Route::resource('/nerds', 'NerdController');

       });

Auth::routes();

Route::get('/home', 'HomeController@index');
