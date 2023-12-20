<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:4|max:50',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|min:5|confirmed',
            'password_confirmation'=> 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Un nombre es requerido',
            'name.min' => 'Minimo 4 caracteres',
            'name.max' => 'Maximo 50 caracteres',
            'email.required' => 'Un correo es requerido',
            'email.email' => 'Correo tipo email',
            'email.unique' => 'El correo ya esta registrado',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'Minimo 5 caracteres',
            'password.confirmed' => 'La contraseña no coincide',
            'password_confirmation' => 'La contraseña es requerida'
        ];
    }
}
