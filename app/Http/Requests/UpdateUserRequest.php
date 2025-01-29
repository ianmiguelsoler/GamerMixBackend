<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_usuario' => 'sometimes|string|max:50|unique:users,nombre_usuario,' . $this->user->id,
            'email' => 'sometimes|email|max:100|unique:users,email,' . $this->user->id,
            'password' => 'nullable|string|min:8',
            'nivel' => 'sometimes|integer|min:1|max:100',
            'experiencia' => 'sometimes|integer|min:0',
        ];
    }
}
