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


Route::get('/', 'UrlController@create');
Route::post('/', 'UrlController@store');
Route::get('{url}/stats', 'UrlController@view_stats');
Route::get('{url}/', 'UrlController@redirect');