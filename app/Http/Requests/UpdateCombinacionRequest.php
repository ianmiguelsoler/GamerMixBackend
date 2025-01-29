<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCombinacionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_skin' => 'sometimes|exists:skins,id',
            'id_elemento' => 'sometimes|exists:elementos,id',
            'nombre_combinacion' => 'sometimes|string|max:100',
        ];
    }
}
