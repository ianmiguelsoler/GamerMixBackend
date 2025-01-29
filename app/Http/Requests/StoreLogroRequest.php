<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLogroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_logro' => 'required|string|max:100|unique:logros,nombre_logro',
            'descripcion' => 'nullable|string',
            'puntos' => 'integer|min:0',
        ];
    }
}
