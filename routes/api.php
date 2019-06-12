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

Route::get('mission', 'MissionController@index');
Route::get('mission/{mission}', 'MissionController@show');
Route::post('mission', 'MissionController@store');
Route::put('mission/{mission}', 'MissionController@update');
Route::delete('mission/{mission}', 'MissionController@delete');