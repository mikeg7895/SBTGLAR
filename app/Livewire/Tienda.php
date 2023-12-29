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
    public $isLogged = false;
    public $session;

    public function mount(){
        if(auth()->user()){
            $this->user = User::find(auth()->user()->id);
            $this->isLogged = true;
        }
    }

    public function render()
    {
        if(auth()->user()){
            $user = auth()->user();
            $this->count = User::find($user->id)->productos()->wherePivot("pago", false)->count();
        }else{
            $this->session = session()->get('carrito', []);
            $this->count = count($this->session);
        }
        $this->productos = Producto::orderBy("created_at","desc")->get();
        return view('livewire.tienda');
    }

    public function store($id){
        $producto = Producto::find($id);
        if(!auth()->user()){
            $exist = false;
            $cache = session()->get('carrito', []);
            foreach($cache as $cach){
                if($cach->name == $producto->name){
                    $exist = true;
                    break;
                }
            }
            if(!$exist){
                $producto->setAttribute('cantidad', 1);
                $cache[] = $producto;
                session()->put('carrito', $cache);
            }
        }else{
            if(!$producto->users()->where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->where('pago', false)->exists()){
                $producto->users()->attach(auth()->user(), ['cantidad' => 1, 'created_at' => now(), 'updated_at' => now()]);
            }
        }
    }
}
