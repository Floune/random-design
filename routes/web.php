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

Route::get('/', 'PostController@index')->name('home');
Route::get('/create', 'PostController@create')->name('create');
Route::post('/post', 'PostController@store')->name('post');

Route::get('/phrase', 'PhraseController@reroll')->name('reroll');
