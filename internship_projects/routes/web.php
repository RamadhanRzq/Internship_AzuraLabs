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
Route::post('/home/input/tambah','DiklatController@store')->name('diklat.store');
//Route::get('admin/forms/formedituser/{id}','UserController@edit')->name('user.edit');
//Route::put('admin/forms/formedituser/{id}','UserController@update')->name('user.update');
//Route::delete('admin/forms/hapususer/{id}','UserController@destroy')->name('user.destroy');