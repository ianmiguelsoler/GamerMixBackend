<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateGaleriaRequest
 *
 * Valida los datos enviados al actualizar un registro en la galería.
 *
 * @package App\Http\Requests
 *
 * @property int|null $id_usuario ID del usuario que guarda la combinación (opcional)
 * @property int|null $id_combinacion ID de la combinación guardada (opcional)
 */
class UpdateGaleriaRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para actualizar un registro en la galería.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'id_usuario' => 'sometimes|exists:users,id',
            'id_combinacion' => 'sometimes|exists:combinaciones,id',
        ];
    }
}
