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

//Route::resource('cliente', 'ClienteController');
//Route::get('/cliente', 'ClienteController@index')->name('cliente');



Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController');

Route::resource('cliente', 'ClienteController');
