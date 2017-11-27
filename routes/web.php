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

Route::get('/', 'PostController@home')->name('home');

Route::get('/postadd', 'PostController@postCreate')->name('postAdd');

Route::post('/postadd/store', 'PostController@postStore');

Route::get('/post/{id}', 'PostController@postShow')->name('postShow');
