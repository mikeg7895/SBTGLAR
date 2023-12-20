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
        $this->user = Auth()->user();
        $this->productos = User::find($this->user->id)->productos()->wherePivot('pago', false)->get();
        $total = 0; 
        foreach($this->productos as $producto){
            $total = $total + ($producto->precio * $producto->pivot->cantidad);
        }
        $this->total = $total;
        return view('livewire.carrito');
    }


    public function operar($id, $operacion){
        $producto = Producto::find($id)->users();
        $cantidad = $producto->find($this->user)->pivot->cantidad;
        if($operacion == 1){
            $producto->updateExistingPivot($this->user->id, ['cantidad' => $cantidad+1]);
        }else{
            $producto->updateExistingPivot($this->user->id, ['cantidad' => $cantidad-1]);
        }
    }

    public function setCantidad($valor, $id){
        $producto = Producto::find($id)->users();
        $producto->updateExistingPivot($this->user->id, ['cantidad' => $valor]);
    }

    public function delete($id){
        Producto::find($id)->users()->where($this->user->id)->detach();
    }
}
