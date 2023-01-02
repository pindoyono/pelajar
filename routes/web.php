<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',"UserController@indexGetUser");

Auth::routes();

Route::get('/home', 'UserController@getAllUserServerSide')->name('home');

Route::get("users_server_side", "UserController@getAllUserServerSide")->name("user.data");
Route::get("index_get_user", "UserController@indexGetUser");
Route::post('users_import', 'UserController@import')->name('users.import');
Route::post('import', 'UserController@import')->name('import');
Route::get('/edit/{id}', 'UserController@edit')->name('edit');
Route::get('/pdf', 'UserController@print')->name('print');
