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
        }
        return view('livewire.detail');
    }

    public function store($id){
        if(!auth()->user()){
            return redirect()->route('login');
        }
        $producto = Producto::find($id);
        if(!$producto->users()->where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->where('pago', false)->exists()){
            $producto->users()->attach(auth()->user(), ['cantidad' => $this->cantidad, 'created_at' => now(), 'updated_at' => now()]);
            $this->count++;
        }
    }
}
