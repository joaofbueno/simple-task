<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskApiController;
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

Route::get('/tasks/{id?}', 'TaskApiController@get')->where ('id', '[0-9]+') ->name('get');
Route::post('/tasks', 'TaskApiController@add')->name('add-api');
Route::post('/tasks/update/{id}', 'TaskApiController@update');
Route::get('/tasks/delete/{id}', 'TaskApiController@delete');
Route::get('/tasks/move/{id}', 'TaskApiController@moveUp');

// Route::post('/tasks', 'TaskController@create');

// Route::get('/tasks', 'TaskController@index');

