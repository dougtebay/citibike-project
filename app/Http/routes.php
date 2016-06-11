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

Route::get('/', 'FavoritesController@index');

Route::get('stations', 'StationsController@index');

Route::get('favorites', 'FavoritesController@index');

Route::post('favorites', 'FavoritesController@store');

Route::delete('favorites/{id}', 'FavoritesController@destroy');

Route::get('maps', 'MapsController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
