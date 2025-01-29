<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreElementoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_elemento' => 'required|string|max:50|unique:elementos,nombre_elemento',
            'descripcion' => 'nullable|string',
            'imagen_url' => 'required|url',
        ];
    }
}
