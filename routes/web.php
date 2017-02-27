<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'auth'],function (){
    Route::resource('categories', 'CategoriesController',['except'=>['show']]);
    Route::resource('books', 'BooksController',['except'=>['show']]);
});


