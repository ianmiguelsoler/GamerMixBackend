<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateElementoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_elemento' => 'sometimes|string|max:50|unique:elementos,nombre_elemento,' . $this->elemento->id,
            'descripcion' => 'nullable|string',
            'imagen_url' => 'sometimes|url',
        ];
    }
}
