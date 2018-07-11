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


Route::get('/','routesController@home');
Route::get('login','routesController@loginView');


Route::get('dashboard/{dep}/register','routesController@edit');
Route::get('dashboard/{dep}/{sec}/{id}','routesController@edit');


Route::get('dashboard','routesController@dashboardView');
Route::get('dashboard/{dep}','routesController@dashboardView');
Route::get('dashboard/{dep}/{id}','routesController@dashboardView');

