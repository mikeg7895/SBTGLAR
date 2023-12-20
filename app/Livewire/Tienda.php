<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Producto;

class Tienda extends Component
{
    public $count = 0;
    public $productos;
    public $user;

    public function render()
    {
        $this->user = User::find(auth()->user()->id);
        if(auth()->user()){
            $user = auth()->user();
            $this->count = User::find($user->id)->productos()->wherePivot("pago", false)->count();
        }
        $this->productos = Producto::orderBy("created_at","desc")->get();
        return view('livewire.tienda');
    }

    public function store($id){
        if(!auth()->user()){
            return redirect()->route('login');
        }

        $producto = Producto::find($id);
        if(!$producto->users()->where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->where('pago', false)->exists()){
            $producto->users()->attach(auth()->user(), ['cantidad' => 1, 'created_at' => now(), 'updated_at' => now()]);
            $this->count++;
        }
    }

}
