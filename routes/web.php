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
})->name('index');

Auth::routes();

Route::post('/order/store', 'OrderController@store')->name('order.store');
Route::get('/order/create', 'OrderController@create')->name('order.create');

Route::get('/home', 'HomeController@index')->name('home');
