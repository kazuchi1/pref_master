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

Route::get('/', 'MasterController@index');
Route::get('/masters/index', 'MasterController@index');
Route::get('/masters/edit', 'MasterController@edit');
Route::post('/masters/confirm', 'MasterController@confirm');
Route::post('/masters', 'MasterController@store');
Route::delete('/masters/{master}', 'MasterController@destroy');