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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'ArticleController@index')->name('articles.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/articles', 'ArticleController');

Route::post('/comments', 'CommentController@store')->name('comments.store');