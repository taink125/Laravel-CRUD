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

Route::prefix('main')->name('main.')->group(function() {
	Route::get('/create', 'CrudController@create')->name('create');
	Route::post('/', 'CrudController@store')->name('store');
	Route::get('/{id}/edit', 'CrudController@edit')->name('edit');
	Route::put('/{id}', 'CrudController@update')->name('update');
	Route::delete('/{id}', 'CrudController@destroy')->name('destroy');
});

