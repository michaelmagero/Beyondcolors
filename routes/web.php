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

Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');

Route::get('/membership', 'PageController@membership');

Route::get('/services', 'PageController@services');

Route::get('/problem', 'PageController@problem');

Route::get('/solution', 'PageController@solution');

Route::get('/impact', 'PageController@impact');

Route::get('/contact', 'PageController@contact');

Route::get('/events', 'PageController@event');

Route::get('/partners', 'PageController@partners');
Auth::routes();

Route::get('/home', 'HomeController@index');
