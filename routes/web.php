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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/' , 'BookController@index')->name('index');
Route::post('/addBook' ,'BookController@store')->name('add.book');
Route::post('/delete/{id}', 'BookController@hapus');
Route::post('/edit/{id}' , 'BookController@update');
Route::get('/edit/{id}', 'BookController@showEdit')->name('showedit.page');
Route::post('/update/{id}', 'BookController@update')->name('edit');

