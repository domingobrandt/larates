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

Route::get('/', function () {
    return view('welcome');
});
Route::get('testing/{name}', 'TestingController@testing');


Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = ' apellido') {
    return 'Hello i am ' .$name .$lastname;
});

Route::resource('list', 'ListController');

Route::get('/mifristroute', function () {
    return 'Hello World';
});
