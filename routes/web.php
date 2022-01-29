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

Route::get('/', 'MenuController@index');
Route::get('/menus', 'MenuController@index');
Route::get('/menus/create', 'MenuController@create');
Route::post('/menus', 'MenuController@store');
Route::post('/comments', 'MenuController@Commentstore');
Route::get('/menus/{menu}/edit', 'MenuController@edit');
Route::get('/menus/{menu}/comment', 'MenuController@comment');
Route::put('/menus/{menu}', 'MenuController@update');
Route::delete('/menus/{menu}', 'MenuController@delete');

Route::get('/menus/{menu}', 'MenuController@show');



Route::get('/comment', 'CommentController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
