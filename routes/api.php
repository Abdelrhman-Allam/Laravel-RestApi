<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => '/v1'], function(){


	Route::get('/tasks',  [ "uses" => "Api\TaskController@index", "as" => 'tasks.list'] );

	Route::get('/tasks/{id}', ['uses' => "Api\TaskController@show" ,"as" => 'tasks.show']);

	Route::post('/tasks', ['uses' => "Api\TaskController@store" , "as" => 'tasks.store']);

	Route::put('/tasks/{id}', [ 'uses' => "Api\TaskController@update", "as" => 'tasks.update']);

	Route::delete('/tasks/{id}', ['uses' => "Api\TaskController@delete", "as" => 'tasks.delete']);

});


