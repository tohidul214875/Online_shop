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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/open', 'ProductController@index');

Route::get('/product', 'ItemController@get_form');
Route::post('/product', 'ItemController@post_data');
Route::get('/table', 'ItemController@index');

Route::get('product/create', 'CategoriesController@create');
Route::post('product/store', 'CategoriesController@store');
Route::get('product', 'CategoriesController@index');
