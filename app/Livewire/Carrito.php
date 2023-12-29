<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Producto;

class Carrito extends Component
{

    public $productos;
    public $user;
    public $total;


    public function render()
    {
        if(auth()->user()){
            $this->user = Auth()->user();
            $this->productos = User::find($this->user->id)->productos()->wherePivot('pago', false)->get();
            $total = 0; 
            foreach($this->productos as $producto){
                $total = $total + ($producto->precio * $producto->pivot->cantidad);
            }
            $this->total = $total;  
        }else{
            $this->productos = session()->get('carrito', []);
            $total = 0; 
            foreach($this->productos as $producto){
                $total = $total + ($producto->precio * $producto->cantidad);
            }
            $this->total = $total;  
        }
        return view('livewire.carrito');
    }


    public function operar($id, $operacion){
        if(auth()->user()){
            $producto = Producto::find($id)->users();
            $cantidad = $producto->find($this->user)->pivot->cantidad;
            if($operacion == 1){
                $producto->updateExistingPivot($this->user->id, ['cantidad' => $cantidad+1]);
            }else{
                $producto->updateExistingPivot($this->user->id, ['cantidad' => $cantidad-1]);
            }
        }else{
            $productos = session()->get('carrito', []);
            foreach($productos as $producto){
                if($producto->id == $id){
                    $cantidad = $producto->cantidad;
                    if($operacion == 1){
                        $producto->setAttribute('cantidad', $cantidad+1);
                    }else{
                        $producto->setAttribute('cantidad', $cantidad-1);
                    }
                }
            }
            session(['carrito' => $productos]);
        }
    }

    public function setCantidad($valor, $id){
        if(auth()->user()){
            $producto = Producto::find($id)->users();
            $producto->updateExistingPivot($this->user->id, ['cantidad' => $valor]);
        }else{
            $productos = session()->get('carrito', []);
            foreach($productos as $producto){
                if($producto->id == $id){
                    $producto->setAttribute('cantidad', $valor);
                }
            }
            session(['carrito' => $productos]);
        }
    }

    public function delete($id){
        if(auth()->user()){
            Producto::find($id)->users()->where($this->user->id)->detach();
        }else{
            $productos = session()->get('carrito', []);
            $productos = array_filter($productos, function($producto) use ($id){
                return $producto['id'] !== $id;
            });
            session(['carrito' => $productos]);
        }
    }

    public function redirectToCheckOut(){
        if(!auth()->user()){
            return redirect()->route('login')->with("login", "Inicia sesion para continuar");
        }else{
            return redirect()->route('login');
        }
    }
}
