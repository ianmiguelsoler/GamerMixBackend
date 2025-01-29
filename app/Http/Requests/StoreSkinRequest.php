<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkinRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_skin' => 'required|string|max:50|unique:skins,nombre_skin',
            'descripcion' => 'nullable|string',
            'imagen_url' => 'required|url',
        ];
    }
}
