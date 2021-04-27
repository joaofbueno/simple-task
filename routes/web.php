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

Route::get('/tasks/add', 'TaskController@add');
Route::get('/tasks/{id?}', 'TaskController@get');
Route::get('/tasks/update', 'TaskController@update');
Route::get('/tasks/delete', 'TaskController@delete');

// Route::get('/tasks/add', 'TaskController@viewCreate');

// //Mostra todas ou uma task só
// Route::get('/tasks/{id?}', 'TaskController@get');