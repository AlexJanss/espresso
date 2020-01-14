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

$router->get('espressos',  ['uses' => 'EspressoController@showAllEspressos']);

$router->get('espressos/{id}', ['uses' => 'EspressoController@showOneEspresso']);

$router->post('espressos', ['middleware' => 'auth:create:espresso', 'uses' => 'EspressoController@create']);

$router->delete('espressos/{id}', ['uses' => 'EspressoController@delete']);

$router->put('espressos/{id}', ['uses' => 'EspressoController@update']);
