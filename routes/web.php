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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('espressos',  ['uses' => 'EspressoController@showAllEspressos']);

Route::get('espressos/{id}', ['uses' => 'EspressoController@showOneEspresso']);

Route::post('espressos', ['middleware' => 'auth:create:espresso', 'uses' => 'EspressoController@create']);

Route::delete('espressos/{id}', ['uses' => 'EspressoController@delete']);

Route::put('espressos/{id}', ['uses' => 'EspressoController@update']);
