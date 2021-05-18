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

Auth::routes();
Route::get('/', 'HomeMainController@index');
Route::get('/about', 'HomeMainController@aboutUs');
Route::get('/formulary', 'HomeMainController@formulary');
Route::get('/brochures', 'HomeMainController@brochures');
Route::get('/contact', 'HomeMainController@contact');

Route::get('/products', 'ProductController@index');
Route::get('/products/{category}',  'ProductController@indexByCategory');
Route::get('/products/{category}/{alias}',  'ProductController@indexByCategoryAlias');

Route::get('/password-reset', 'Auth\PasswordResetController@index');
Route::post('/password-reset', 'Auth\PasswordResetController@passwordReset');



