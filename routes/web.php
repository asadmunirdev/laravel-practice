<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','NewController@index');
Route::get('/index','NewController@home');
Route::get('/contact','NewController@contact');
Route::get('/std','StudentController@std');
Route::post('/xyz','StudentController@store');
Route::get('get_data','StudentController@get_data');
Route::get('/delete/{id}','StudentController@delete');
Route::get('/edit/{id}','StudentController@edit');
Route::post('/update/{id}','StudentController@update');
