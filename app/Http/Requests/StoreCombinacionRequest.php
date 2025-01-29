<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCombinacionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_skin' => 'required|exists:skins,id',
            'id_elemento' => 'required|exists:elementos,id',
            'nombre_combinacion' => 'required|string|max:100',
        ];
    }
}
