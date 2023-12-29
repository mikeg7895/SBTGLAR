<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login.login");
    }

    public function validar(LoginRequest $request){
        if(!Auth::attempt($request->only("email","password"))){
            return redirect()->route("login")->with("error","Contraseña incorrecta");
        }
        $this->saveCarrito();
        return redirect()->route("inicio");
    }

    public function saveCarrito(){
        $productos = session()->get('carrito', []);
        $usuario = User::find(auth()->user()->id);
        if(session('carrito') && $productos){
            foreach($productos as $producto){
                if(!$usuario->productos->find($producto->id)){
                    $productoCarrito = Producto::find($producto->id);
                    $usuario->productos()->attach($productoCarrito, ['cantidad' => $producto->cantidad, 'created_at' => now(), 'updated_at' => now()]);
                }else{
                    $usuario->productos()->updateExistingPivot($producto->id, ['cantidad' => $producto->cantidad]);
                }
            }
            return redirect()->route("carrito");
        }
    }
}
