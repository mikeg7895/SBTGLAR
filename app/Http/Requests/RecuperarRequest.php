<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecuperarRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email'
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Correo necesario',
            'email.email' => 'Formato de correo necesario',
            'email.exists' => 'El correo no esta registrado'
        ];
    }
}
