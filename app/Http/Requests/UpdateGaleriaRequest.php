<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGaleriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_usuario' => 'sometimes|exists:users,id',
            'id_combinacion' => 'sometimes|exists:combinaciones,id',
        ];
    }
}
