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

//rutas de usuarios
Route::get('/usuarios', 'UsersController@index')->name('index_usuario');
Route::post('/crear_usuario/', 'UsersController@store')->name('crear_usuario');
Route::get('/eliminar_usuario/{id}', 'UsersController@destroy')->name('eliminar_usuario');
Route::post('/actualizar_usuario/', 'UsersController@update')->name('actualizar_usuario');
Route::get('/traer_info_usuario/{id}', 'UsersController@edit')->name('traer_info_usuario');

//rutas de planes
Route::get('/planes', 'PlanesController@index')->name('index_planes');
Route::post('/crear_planes', 'PlanesController@store')->name('create_planes');
Route::get('/eliminar_plan/{id}', 'PlanesController@destroy')->name('eliminar_plan');
Route::get('/traer_info_plan/{id}', 'PlanesController@edit')->name('traer_info_plan');
Route::post('/actualizar_plan', 'PlanesController@update')->name('actualizar_plan');

//rutas de localidades
Route::get('/localizaciones', 'LocalizacionController@index')->name('index_localizaciones');
Route::get('/eliminar_localizacion/{id}', 'LocalizacionController@destroy')->name('eliminar_localizacion');
Route::get('/traer_info_localizacion/{id}', 'LocalizacionController@edit')->name('traer_info_localizacion');
Route::post('/actualizar_localizacion', 'LocalizacionController@update')->name('actualizar_localizacion');
Route::post('/crear_localizacion', 'LocalizacionController@store')->name('create_localizacion');