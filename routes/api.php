<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks/{id?}', 'TaskController@get')->where ('id', '[0-9]+') ->name('get');
Route::post('/tasks', 'TaskController@add')->name('add');
Route::put('/tasks/{id}', 'TaskController@update')->name('update');
Route::delete('/tasks/{id}', 'TaskController@delete')->name('delete');

// Route::post('/tasks', 'TaskController@create');

// Route::get('/tasks', 'TaskController@index');

