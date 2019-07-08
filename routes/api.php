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

Route::group(['prefix' => 'comision'], function() {
    Route::get('/', 'ComisionController@index')->name('comision');
    Route::get('/{post}', 'ComisionController@show')->name('comision.show');
    Route::post('/', 'ComisionController@store')->name('comision.store');
});

Route::group(['prefix' => 'nota'], function() {
    Route::get('/', 'ApiNotaController@index')->name('nota');
    Route::get('/{post}', 'ApiNotaController@show')->name('nota.show');
    Route::post('/', 'ApiNotaController@store')->name('nota.store');

});