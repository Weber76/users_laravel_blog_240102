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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return "¡Hola mundo!";
});

Route::get('/hola-json', function () {
    return [1, 2, 3];
});

Route::get('/home', function () {
    return response('Esta es nuestra Home', 200)
        ->header('Content-Type', 'text/plain')
        ->header('Mi-Header-Personalizado', 'Mi Valor Personalizado')
        ->cookie('hola-cookies', 'mi-valor-encriptado', 60);
});

Route::redirect('/', '/home');

Route::get('/hola/{persona?}', function ($persona = "humano") {
    return "Hola " . $persona . "<br><a href='" . route('decir.bienvenido', ["Blogger" => $persona]) . "'>Decir Bienvenido</a>";
})->where('persona', '[A-Za-z]+')->name('decir.hola');

Route::get('/bienvenido/{blogger?}', function ($blogger = "Blogger") {
    return "Bienvenido " . $blogger;
})->where('blogger', '[A-Za-z]+')->name('decir.bienvenido');
