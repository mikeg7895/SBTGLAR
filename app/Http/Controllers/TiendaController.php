<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use Illuminate\Http\Request;
use App\Models\Producto;

class TiendaController extends Controller
{
    public function index(){
        return view("shop.productos");
    }

    public function store(ProductoRequest $request){
        $imageName = time().".".$request->image->extension();
        $request->image->storeAs("public/images", $imageName);
        
        Producto::create([
            "name" => $request->name,
            "descripcion" => $request->content,
            "precio" => $request->precio,
            "imagen" => $imageName
        ]);
        return redirect()->route("shop");
    }

    public function carrito(){
        return view("shop.cart");
    }

    public function pagar(){
        return view("shop.checkout");
    }

    public function detail($id){
        return view('shop.detail', compact('id'));
    }
}
