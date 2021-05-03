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
Route::get('/', 'TaskController@get');

Route::get('/tasks/add', 'TaskController@add')->name('add');
Route::get('/tasks/{id?}', 'TaskController@get')->where('id', '[0-9]+') -> name('get');
Route::get('/tasks/update/{id}', 'TaskController@update')->name('update');
Route::get('/tasks/delete/{id}', 'TaskController@delete')->name('delete');

Route::get('/tasks/urgent', 'TaskController@getUrgent')->name('getUrgent');
Route::get('/tasks/checked', 'TaskController@getChecked')->name('getChecked');
Route::get('/tasks/move/{id}', 'TaskController@moveUp')->name('move');
