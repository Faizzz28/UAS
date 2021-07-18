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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('mahasiswa', ['as' => 'mahasiswa', 'uses' => 'MahasiswaController@index']);
	Route::get('mahasiswa/create', ['as' => 'mahasiswa.create', 'uses' => 'MahasiswaController@create']);
	Route::get('mahasiswa/card/{id}', ['as' => 'mahasiswa.showById', 'uses' => 'MahasiswaController@showById']);
	Route::post('mahasiswa/save', ['as' => 'mahasiswa.store', 'uses' => 'MahasiswaController@store']);
	Route::delete('mahasiswa/delete/{id}', ['as' => 'mahasiswa.destroy', 'uses' => 'MahasiswaController@destroy']);
	Route::put('mahasiswa/update', ['as' => 'mahasiswa.update', 'uses' => 'MahasiswaController@update']);
	Route::get('mahasiswa/edit', ['as' => 'mahasiswa.edit', 'uses' => 'MahasiswaController@edit']);
});




