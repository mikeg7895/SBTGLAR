<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;
use App\Models\User;

class Detail extends Component
{

    public $producto;
    public $cantidad = 1;
    public $count;
    public $isset = false;
    public $session;

    public function mount($id){
        $this->producto = Producto::find($id); 
    }

    public function render()
    {
        if(auth()->user()){
            $user = auth()->user();
            $this->count = User::find($user->id)->productos()->wherePivot("pago", false)->count();
            if($this->producto->users()->wherePivot('user_id', auth()->user()->id)->first() != null){
                $this->isset = true;
            }
        }else{
            $this->session = session()->get('carrito', []);
            $this->count = count($this->session);
            foreach($this->session as $sessio){
                if($sessio->id == $this->producto->id){
                    $this->isset = true;
                    break;
                }
            }
        }
        return view('livewire.detail');
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
                $producto->setAttribute('cantidad', $this->cantidad);
                $cache[] = $producto;
                session()->put('carrito', $cache);
            }
        }else{
            if(!$producto->users()->where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->where('pago', false)->exists()){
                $producto->users()->attach(auth()->user(), ['cantidad' => $this->cantidad, 'created_at' => now(), 'updated_at' => now()]);
                $this->count++;
            }
        }
    }
}
