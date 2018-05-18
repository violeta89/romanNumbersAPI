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

//Return roman number and save it in database or update the record
Route::get('number/{conv_number}', 'NumberController@convert');

//List (recently) converted integers 
Route::get('numbers', 'NumberController@index');

//List top 10 converted integers
Route::get('numbers/top10', 'NumberController@showTop10');