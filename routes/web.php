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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UsersController@index')->name('index_users');
Route::post('/crear_usuario/', 'UsersController@store')->name('create_user');
Route::get('/eliminar_usuario/{id}', 'UsersController@destroy')->name('destroy_user');
Route::post('/actualizar_usuario/{id}', 'UsersController@update')->name('update_user');