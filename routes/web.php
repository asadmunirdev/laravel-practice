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

Route::get('/', 'NewController@index');
Route::get('/index', 'NewController@home');
Route::get('/contact', 'NewController@contact');
// Student Routing
Route::get('/std', 'StudentController@std');
Route::post('/xyz', 'StudentController@store');
Route::get('get_data', 'StudentController@get_data');
Route::get('/delete/{id}', 'StudentController@delete');
Route::get('/edit/{id}', 'StudentController@edit');
Route::post('/update/{id}', 'StudentController@update');
// Teacher Routing
Route::get('/tch','TeacherController@tch');
Route::get('get_tch_data', 'TeacherController@get_tch_data');
Route::post('/abc', 'TeacherController@store');
Route::get('get_tch_data', 'TeacherController@get_data');
Route::get('/delete_tch/{id}', 'TeacherController@delete');
Route::get('/edit_tch/{id}', 'TeacherController@edit');
Route::post('/update_tch/{id}', 'TeacherController@update');

