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

Route::get('/', 'CrudController@index');

Route::get('/register', 'CrudController@create');

Route::post('/store-crud', 'CrudController@store');

Route::get('/{id}/edit', 'CrudController@edit');

Route::post('/{id}/update-crud', 'CrudController@update');

Route::get('/{id}/delete', 'CrudController@destroy');
