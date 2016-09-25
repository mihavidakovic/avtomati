<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'as' => 'index',
	'uses' => 'HomeController@getIndex'
]);

Route::get('izdelki/{cat_id}', [
	'as' => 'getIzdelkiKategorija',
	'uses' => 'HomeController@getIzdelkiKategorija'
]);

Route::get('izdelki/{cat_id}/{subcat_id}', [
	'as' => 'getIzdelki',
	'uses' => 'HomeController@getIzdelki'
]);

Route::get('izdelek/{id}', [
	'as' => 'getIzdelek',
	'uses' => 'HomeController@getIzdelek'
]);
Route::get('izdelek/{id}/glasuj/{lestvica}', [
	'as' => 'izdelekGlasuj',
	'uses' => 'HomeController@izdelekGlasuj'
]);