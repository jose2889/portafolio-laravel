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
    return view('layout');
});

Route::get('/prueba', function () {
    return view('lista');
});

Route::get('/usuarios', 'UserController@index')->name('users');

Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id','[0-9]+')->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store');
    
Route::get('/usuarios/editar', 'UserController@edit')->name('users.edit');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.delete');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController')->name('saludar');
    