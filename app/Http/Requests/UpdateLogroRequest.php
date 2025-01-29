<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLogroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_logro' => 'sometimes|string|max:100|unique:logros,nombre_logro,' . $this->logro->id,
            'descripcion' => 'nullable|string',
            'puntos' => 'sometimes|integer|min:0',
        ];
    }
}
