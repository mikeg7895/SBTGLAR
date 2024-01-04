<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacto;
use App\Mail\ContactoMail;

class Contact extends Component
{

    public $email;
    public $name;
    public $number;
    public $message;
    public $feedback;

    public function render()
    {
        return view('livewire.contact');
    }

    protected function rules(){
        return [
            'name' => 'required|max:30|min:4',
            'email' => 'required|email',
            'number' => 'required|max:10|min:10',
            'message' => 'required|max:255|min:5'
        ];
    }

    protected $messages = [
        'name.required' => 'El nombre es requerido',
        'name.max' => 'El nombre tiene un maximo de 30 caracteres',
        'name.min' => 'El nombre minimo de 4 caracteres',
        'email.required' => 'El email es requerido',
        'email.email' => 'Formato de correo',
        'number.required' => 'El numero es requerido',
        'number.max' => 'Maximo y minimo 10 caracteres',
        'message.required' => 'El mensaje es requerido',
        'message.max' => 'Maximo 255 caracteres',
        'message.min' => 'Minimo 5 caracteres'
    ];

    public function closeAndClean(){
        $this->reset([
            'name',
            'email',
            'number',
            'message'
        ]);
        $this->resetValidation([
            'name',
            'email',
            'number',
            'message'
        ]);
    }

    public function validar(){
        $this->validate();
        Mail::to($this->email)->send(new ContactoMail($this->name));
        Contacto::create([
            'name' => $this->name,
            'email' => $this->email,
            'number' => $this->number,
            'message' => $this->message
        ]);
        $this->feedback = "Mensaje enviado";
        $this->closeAndClean();
    }
}
