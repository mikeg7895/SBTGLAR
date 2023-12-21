<?php

namespace App\Livewire;

use App\Models\Servicio;
use Livewire\Component;

class Book extends Component
{
    public $services;
    public $titulo;
    public $fecha;
    public $nombre;
    public $contacto;

    public function mount()
    {
        $this->fecha = date('Y-m-d');
        if(auth()->user()){
            $this->nombre = auth()->user()->name;
        }
        $this->services = Servicio::all();
    }

    public function render()
    {
        return view('livewire.book');
    }

    public function store()
    {
        dd($this->titulo, $this->fecha);
    }
}
