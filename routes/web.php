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

Route::get('/brochures', 'HomeMainController@brochures');
Route::get('/contact', 'HomeMainController@contact');

Route::get('/products', 'ProductController@index');
Route::get('/products/{category}',  'ProductController@indexByCategory');
Route::get('/products/{category}/{alias}',  'ProductController@indexByCategoryAlias');
Route::post('/products/request',            'ProductController@requestProducts');
Route::get('/password-reset', 'Auth\PasswordResetController@index');
Route::post('/password-reset', 'Auth\PasswordResetController@passwordReset');

Route::post('/user/approve',   'Auth\RegisterController@approve');



Route::get('/portal/dashboard',  'DashboardController@index')->middleware('auth');
Route::get('/portal/products',   'ProductController@authIndex')->middleware('auth');
Route::get('/formulary',         'ProductController@formulary')->middleware('auth');
Route::get('/portal/pdf',        'PdfController@getPdf')->middleware('auth');
