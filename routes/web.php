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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/table', 'ItemController@index');
Route::get('/open', 'ProductController@output');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('product', 'ProductController');
Route::resource('customer', 'CustomerController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController')->middleware('auth');

Route::resource('roles', 'RoleController')->middleware('auth');

Route::resource('permissions', 'PermissionController')->middleware('auth');

Route::resource('category', 'CategoryController');
Route::resource('items', 'ItemController');

