<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreGaleriaRequest
 *
 * Valida los datos enviados al crear una nueva entrada en la galería.
 *
 * @package App\Http\Requests
 *
 * @property int $id_usuario ID del usuario que guarda la combinación
 * @property int $id_combinacion ID de la combinación guardada
 */
class StoreGaleriaRequest extends FormRequest
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
     * Reglas de validación para almacenar un registro en la galería.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'id_usuario' => 'required|exists:users,id',
            'id_combinacion' => 'required|exists:combinaciones,id',
        ];
    }
}
