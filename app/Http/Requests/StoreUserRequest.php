<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_usuario' => 'required|string|max:50|unique:users,nombre_usuario',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:8',
            'nivel' => 'integer|min:1|max:100',
            'experiencia' => 'integer|min:0',
        ];
    }
}
