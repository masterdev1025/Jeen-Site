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


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@aboutUs');
Route::get('/formulary', 'HomeController@formulary');
Route::get('/brochures', 'HomeController@brochures');
Route::get('/contact', 'HomeController@contact');

Route::get('/products', 'ProductController@index');
Route::get('/products/{category}',  'ProductController@indexByCategory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
