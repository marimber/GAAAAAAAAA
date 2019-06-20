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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/{id}/edit', 'UserController@edit')->name('edit');

Route::resource('users', 'UserController');

Route::get('user', 'VideoGamesController@showuser')->name('edita');

Route::post('update', 'UserController@update')->name('update');

Route::get('userdestroy', 'UserController@destroy')->name('userdestroy');


