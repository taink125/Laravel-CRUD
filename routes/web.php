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

Route::get('/', 'CrudController@index')->name('main.index');

Route::get('/register', 'CrudController@create')->name('main.create');

Route::post('/store-crud', 'CrudController@store')->name('main.store');

Route::get('/edit/{id}', 'CrudController@edit')->name('main.edit');

Route::put('/update-crud/{id}', 'CrudController@update')->name('main.update');

Route::get('/delete/{id}', 'CrudController@destroy')->name('main.destroy');
