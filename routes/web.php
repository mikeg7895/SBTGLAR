<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BlogController;


Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::post('/formulario' , [InicioController::class,'validar'])->name('validar');

Route::get('/iniciar-sesion', [LoginController::class, 'index'])->name('login');
Route::view('/perfil', 'login.profile')->name('profile')->middleware('auth');
Route::post('/salir', [LogoutController::class, 'destroy'])->name('logout');
Route::post('/validar-inicio', [LoginController::class,'validar'])->name('validar.login');

Route::get('/registrarse',[RegisterController::class, 'create'])->name('registrar');
Route::post('/validar-registro', [RegisterController::class,'store'])->name('validar.registro');
Route::view('/olvido-contraseña','login.forgot')->name('olvido');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');