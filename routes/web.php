<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;


Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::post('/formulario' , [InicioController::class,'validar'])->name('validar');

Route::get('/blog', function () {
    return view('pags.blog');
})->name('blog');

Route::get('/Iniciar-sesion', function () {
    return view('login.login');
})->name('login');

Route::get('/Registrarse', function () {
    return view('login.register');
})->name('registrar');

Route::get('/Olvido-contraseña', function () {
    return view('login.forgot');
})->name('olvido');