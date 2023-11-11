<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;

class InicioController extends Controller
{
    public function index(){
        return view("pags.index");
    }

    public function validar(ContactoRequest $request){
        return redirect()->route('inicio')->with('success','Mensaje enviado');
    }
}
