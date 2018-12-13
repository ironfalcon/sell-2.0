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
//order routes
Route::post('/order/store', 'OrderController@store')->name('order.store');
Route::get('/order/create', 'OrderController@create')->name('order.create');
Route::get('/order/index', 'OrderController@index')->name('order.index');
Route::get('/order/show/{id}', 'OrderController@show')->name('order.show');

//questions routes
Route::get('/questions/index', 'QuestionController@index')->name('questions.index');
Route::post('/questions/store', 'QuestionController@store')->name('questions.store');


Route::get('/home', 'HomeController@index')->name('home');
