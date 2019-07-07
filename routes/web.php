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

Route::group(['prefix' => 'comisiones'], function () {
	Route::get('/', 'ComisionController@index')->name('comisiones');
	Route::get('/{post}', 'ComisionController@show')->name('comision.show');
});

Route::group(['prefix' => 'notas'], function () {
	Route::get('/', 'NotaController@index')->name('notas');
	Route::get('/create', 'NotaController@create')->name('notas.create');

	Route::get('/{post}', 'NotaController@show')->name('notas.show');
});