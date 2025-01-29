<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSkinRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_skin' => 'sometimes|string|max:50|unique:skins,nombre_skin,' . $this->skin->id,
            'descripcion' => 'nullable|string',
            'imagen_url' => 'sometimes|url',
        ];
    }
}
