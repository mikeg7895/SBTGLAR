<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMail;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Http\Requests\ServiceRequest;
use App\Models\Reseña;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
    public function index(){
        $reseñas = Reseña::all();
        $servicios = Servicio::all();
        return view("pags.index", compact("reseñas", "servicios"));
    }

    public function storeService(ServiceRequest $request){
        $imageName = time().".".$request->imagen->extension();
        $request->imagen->storeAs("public/images", $imageName);
        Servicio::create([
            'user_id' => auth()->user()->id,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'contenido' => $request->contenido,
            'imagen' => $imageName,
            'precio' => $request->precio
        ]);
        return redirect()->route('inicio');
    }
}
