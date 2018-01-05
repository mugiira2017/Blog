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
    return view('user.home');
});

Route::get('post','Home@post')->name('post');
Route::resource('admin/post','Postcontroller');
Route::resource('admin/tag','Tagcontroller');
Route::resource('admin/category','categorycontroller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin-login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Admin\Auth\LoginController@login');