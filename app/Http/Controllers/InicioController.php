<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMail;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Models\Reseña;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
    public function index(){
        $reseñas = Reseña::all();
        $servicios = Servicio::all();
        return view("pags.index", compact("reseñas", "servicios"));
    }

    public function validar(ContactoRequest $request){
        Mail::to($request->email)->send(new ContactoMail($request->name));
        return redirect()->route('inicio')->with('success','Mensaje enviado');
    }
}
