<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        return view("login.login");
    }

    public function validar(LoginRequest $request){
        if(!Auth::attempt($request->only("email","password"))){
            return redirect()->route("login")->with("error","Contraseña incorrecta");
        }

        return redirect()->route("blog");
    }
}
