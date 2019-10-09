<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/profile','GrofileController@index');

Route::post('api/profile/create','GrofileController@store');

Route::post('api/profile/edit/{id}','GrofileController@update');

Route::delete('api/profile/{id}','GrofileController@destroy');