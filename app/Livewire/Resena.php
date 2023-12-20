<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reseña;
use Illuminate\Support\Facades\Auth;

class Resena extends Component
{
    public $resena = '';
    public $reseñas;

    public function render()
    {
        $this->reseñas = Reseña::all();
        return view('livewire.resena');
    }

    public function store(){
        if(Auth::check()){
            $this->validate([
                'resena'=> 'required|min:3',
            ]);
            Reseña::create([
                'user_id' => auth()->user()->id,
                'reseña'=> $this->resena,
            ]);
            $this->resena = '';
        }else{
            return redirect()->route('login');
        }
    }
}
