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

 Route::get('GetAirport/{id}', 'AirportController@GetAirport');
 Route::any('GetAirportName/{name}', 'AirportController@GetAirportName');
 Route::any('/postairport', 'AirportController@postairport');
 Route::any('updateairport/{id}', 'AirportController@updateairport');
 Route::any('deleteairport/{id}', 'AirportController@deleteairport');
