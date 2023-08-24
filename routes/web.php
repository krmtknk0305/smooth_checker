<?php

use Illuminate\Support\Facades\Route;

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

/* index */
Route::get('/index','App\Http\Controllers\MainController@home');
Route::post('/timer_create','App\Http\Controllers\MainController@timer_create');
Route::get('/{id}/timer_clear','App\Http\Controllers\MainController@timer_destroy');

/* seats_CRUD */
Route::get('/seats','App\Http\Controllers\MainController@seats');
Route::post('/seats_create','App\Http\Controllers\MainController@seats_create');
Route::post('/seats_store','App\Http\Controllers\MainController@seats_store');
Route::post('/seats_edit','App\Http\Controllers\MainController@seats_edit');
Route::post('/seats_update','App\Http\Controllers\MainController@seats_update');
Route::get('/{id}/seats_destroy','App\Http\Controllers\MainController@seats_destroy');

/* courses_CRUD */
Route::get('/courses','App\Http\Controllers\MainController@courses');
Route::post('/courses_create','App\Http\Controllers\MainController@courses_create');
Route::post('/courses_store','App\Http\Controllers\MainController@courses_store');
Route::post('/courses_edit','App\Http\Controllers\MainController@courses_edit');
Route::post('/courses_update','App\Http\Controllers\MainController@courses_update');
Route::get('/{id}/courses_destroy','App\Http\Controllers\MainController@courses_destroy');
