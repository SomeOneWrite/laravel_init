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

Route::get('/', 'MainController@root');

Route::get('/find_party', 'MainController@find_party')->middleware('vklogin');
Route::get('/create_party', 'MainController@create_party')->middleware('vklogin');
Route::get('/my_party', 'MainController@my_party')->middleware('vklogin');
Route::get('/delete_party', 'MainController@delete_party')->middleware('vklogin');
Route::post('/save_party', 'MainController@save_party')->middleware('vklogin');


Route::get('/logout', 'MainController@logout')->name('logout')->middleware('vklogin');

Route::post('/create_party/file_upload', 'MainController@file_upload')->middleware('vklogin');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vk_login', 'MainController@vk_login_return');
Route::get('/login', 'MainController@login');
