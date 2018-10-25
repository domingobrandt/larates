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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/card', function () {
    return view('cliente.card');
});
Auth::routes();


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cliente', 'ClienteController');
