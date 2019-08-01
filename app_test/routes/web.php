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

Route::get('/find_party', 'MainController@find_party');
Route::get('/create_party', 'MainController@create_party');
Route::post('/save_party', 'MainController@save_party');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register' => false]);

Route::get('/vk_login', 'MainController@vk_login_return');
Route::get('/login', 'MainController@login');
