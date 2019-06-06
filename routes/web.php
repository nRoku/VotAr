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
Route::get('/', 'miController@index')->middleware('auth','role:user');
Route::resource('/votacion', 'miController')->middleware('auth','role:user');

Auth::routes();

Route::get('/votar', 'HomeController@index')->name('home')->middleware('auth','role:user');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');