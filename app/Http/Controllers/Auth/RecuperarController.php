<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecuperarRequest;

class RecuperarController extends Controller
{
    public function index(){
        return view('login.forgot');
    }

    public function send(RecuperarRequest $request){
        
        return redirect()->route('login')->with('message', 'Correo enviado');
    }
}
