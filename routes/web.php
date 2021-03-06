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

Route::get('/', 'LoginController@Home');
Route::post('/login', 'LoginController@Login');
Route::get('/cargarExamen', 'ExamenController@totalPreguntas');
Route::post('getQuestion','ExamenController@getQuestion'); 
