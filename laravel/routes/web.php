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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return "<h1>Hello, World!</h1>";
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('add', 'PhotoController@create')->name('add');
Route::post('save', 'PhotoController@save')->name('save');

Route::get('profile/{nickname}', 'HomeController@profile')->name('profile');


Route::get('photo/{id}', 'PhotoController@show');
Route::post('comment/add', 'PhotoController@addComment');




