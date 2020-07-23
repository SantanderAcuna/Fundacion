<?php

use App\Http\Controllers\BarrioController;
use App\Http\Controllers\EpsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $barrios = (new BarrioController)->listarBarrios();
    $eps = (new EpsController)->listarEps();
    return view('cliente.index', compact('barrios', 'eps'));
});

Auth::routes();

// Rutas cliente

Route::get('cliente', 'ClienteController@index')->name('cliente');
Route::post('cliente', 'ClienteController@store')->name('cliente.guardar');

// Recursos

Route::resource('usuarios', 'UsuarioController');
Route::resource('eps', 'EpsController');
Route::resource('barrio', 'BarrioController');

// Rutas home

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'RegisterController@create')->name('registro');

// Ruta administrador

Route::get('administrador', 'AdminController@index')->name('administrador');
Route::post('administrador', 'AdminController@store')->name('administrador.store');
Route::get('administrador/{id}/edit', 'AdminController@edit')->name('administrador.edit');
Route::put('administrador/{administrador}', 'AdminController@update')->name('administrador.update');
Route::delete('/administrador/{id}', 'AdminController@destroy')->name('administrador.destroy');
Route::get('documento', 'AdminController@doc')->name('documento');
Route::get('administrador/export-listado', 'AdminController@export')->name('export');

// Ruta usuarios

Route::get('usuarios', 'UsuarioController@index')->name('usuarios');
Route::post('usuarios', 'UsuarioController@store')->name('usuarios.store');
Route::get('usuarios/{usuario}/edit', 'UsuarioController@edit')->name('usuarios.edit');
Route::put('usuarios/{usuario}', 'UsuarioController@update')->name('usuarios.update');
Route::delete('/usuarios/{id}', 'UsuarioController@destroy')->name('usuarios.destroy');

// Ruta eps

Route::get('eps', 'EpsController@index')->name('eps');
Route::post('eps', 'EpsController@store')->name('eps.store');
Route::get('eps/{ep}/edit', 'EpsController@edit')->name('eps.edit');
Route::put('eps/{ep}', 'EpsController@update')->name('eps.update');
Route::delete('/eps/{id}', 'EpsController@destroy')->name('eps.destroy');

// Ruta barrios
Route::get('barrio', 'BarrioController@index')->name('barrios');
Route::post('barrio', 'BarrioController@store')->name('barrio.store');
Route::get('barrio/{barrio}/edit', 'BarrioController@edit')->name('barrio.edit');
Route::put('barrio/{barrio}', 'BarrioController@update')->name('barrio.update');
Route::delete('/barrio/{id}', 'BarrioController@destroy')->name('barrio.destroy');
