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
Route::get('/home/input', 'HomeController@input')->name('input');

//CRUD
Route::get('/{id}', 'DiklatController@index')->name('index');