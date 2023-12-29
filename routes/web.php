<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\Auth\RecuperarController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::post('/formulario' , [InicioController::class,'validar'])->name('validar');
Route::post('/save-service', [InicioController::class, 'storeService'])->name('validar.service');


Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();
    $user = User::updateOrCreate([
        'google_id' => $user_google->id,
    ], [
        'name' => $user_google->name,
        'email' => $user_google->email,
    ]);

    Auth::login($user);
    
    return redirect()->route('inicio');
});


Route::get('/iniciar-sesion', [LoginController::class, 'index'])->name('login');
Route::view('/perfil', 'login.profile')->name('profile')->middleware('auth');
Route::post('/salir', [LogoutController::class, 'destroy'])->name('logout');
Route::post('/validar-inicio', [LoginController::class,'validar'])->name('validar.login');

Route::get('/registrarse',[RegisterController::class, 'create'])->name('registrar');
Route::post('/validar-registro', [RegisterController::class,'store'])->name('validar.registro');
Route::get('/olvido-contraseña',[RecuperarController::class, 'index'])->name('olvido');
Route::post('/enviar-email', [RecuperarController::class, 'send'])->name('send');

Route::get('/blog/{pag}', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}', [BlogController::class,'post'])->name('post');
Route::post('/publicar', [BlogController::class, 'store'])->name('publicar');

Route::get('/tienda', [TiendaController::class,'index'])->name('shop');
Route::post('/saveprod', [TiendaController::class,'store'])->name('save.prod');
Route::get('/carrito', [TiendaController::class,'carrito'])->name('carrito');
Route::get('/checkout', [TiendaController::class,'pagar'])->middleware('auth')->name('checkout');
Route::get('/detalle/{id}', [TiendaController::class, 'detail'])->name('detail');