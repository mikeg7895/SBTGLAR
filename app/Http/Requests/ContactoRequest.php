<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:30|min:4',
            'email' => 'required|email',
            'number' => 'required|max:10|min:10',
            'message' => 'required|max:255|min:5'
        ];
    }

    public function messages(){
        return [
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
    }
}
