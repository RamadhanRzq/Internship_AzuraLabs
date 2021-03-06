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

Route::get('/', 'HomeController@homeDashboardButton')->name('homebutton');
Route::get('/home', 'HomeController@homeDashboard')->name('home');

//CRUD
Route::get('/{id}', 'DiklatController@index')->name('index');
Route::get('/home/input','DiklatController@create')->name('diklat.create');
Route::post('/home/input','DiklatController@store')->name('diklat.store');
Route::get('/home/update/{id}','DiklatController@edit')->name('diklat.edit');
Route::put('/home/update/{id}','DiklatController@update')->name('diklat.update');
Route::delete('/home/hapus/{id}','DiklatController@destroy')->name('diklat.destroy');