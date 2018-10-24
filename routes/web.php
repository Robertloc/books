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


Route::get('/books', 'BooksController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/public', 'PublicController@index');
Route::get('/private', 'PrivateController@index');

Route::get('/private/show', 'PrivateController@show');

Route::get('/books/create', 'BooksController@create');

Route::post('/books/store', 'BooksController@store');

Route::get('/books/{id}/edit', 'BooksController@edit');

Route::post('/books/{id}/update', 'BooksController@update');

Route::get('/books/{id}/delete','BooksController@delete');

Route::get('/books/{id}/show','BooksController@show');

Route::get('/books/{id}/show','PublishersController@show');

