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


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/articulos', 'ArticulosController@index')->name('articulos');
Route::get('/articulos/new', 'ArticulosController@index')->name('articulos');



Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    cache()->clear();
    Artisan::call('view:clear');
    return "Cache is cleared";
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/{slug?}', 'HomeController@index');