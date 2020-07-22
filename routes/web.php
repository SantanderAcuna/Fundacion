<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Recursos

Route::resource('administrador', 'AdminController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('eps', 'EpsController');
Route::resource('barrio', 'BarrioController');

// Rutas home

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'RegisterController@create')->name('registro');


// Rutas cliente



Route::get('cliente', 'ClienteController@index')->name('cliente.index');
Route::post('cliente', 'ClienteController@store')->name('cliente.guardar');

// Ruta administrador

Route::get('administrador', 'AdminController@index')->name('admin');
Route::get('administrador/export-listado', 'AdminController@export');

// Ruta usuarios

Route::get('usuarios', 'UsuarioController@index')->name('usuarios');
Route::delete('/usuarios/{id}', 'UsuarioController@destroy')->name('usuarios.destroy');
// Ruta eps

Route::get('eps', 'EpsController@index')->name('eps');
Route::post('eps', 'EpsController@store')->name('eps.store');
Route::delete('/eps/{id}', 'EpsController@destroy')->name('eps.destroy');

// Ruta barrios
Route::get('barrio', 'BarrioController@index')->name('barrios');
Route::post('barrio', 'BarrioController@store')->name('barrio.store');
Route::get('barrio/{barrio}/edit', 'BarrioController@edit')->name('barrio.edit');
Route::put('barrio/{barrio}', 'BarrioController@update')->name('barrio.update');
Route::delete('/barrio/{id}', 'BarrioController@destroy')->name('barrio.destroy');
