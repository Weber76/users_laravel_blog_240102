<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/home', 301);

Route::get('/hola-mundo', 'SaludarController@holaMundo');

Route::get('/hola-json', 'SaludarController@holaJson');

Route::get('/home', 'HomeController@index');

Route::get('/hola/{persona?}', 'SaludarController@decirHola')->where('persona', '[A-Za-z]+')->name('decir.hola');

Route::get('/bienvenido/{blogger?}', 'HomeController@bienvenido')->where('blogger', '[A-Za-z]+')->name('decir.bienvenido');

Route::post('/noticia', 'NoticiaController@store')->name('noticia.store');

Route::get('/noticia/{$id}', 'NoticiaController@show')->name('noticia.show');
