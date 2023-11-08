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
    return view('Layouts.layout');
})->name('inicio');

Route::get('/Iniciar-sesion', function () {
    return view('login.login');
})->name('login');

Route::get('/Registrarse', function () {
    return view('login.register');
})->name('registrar');