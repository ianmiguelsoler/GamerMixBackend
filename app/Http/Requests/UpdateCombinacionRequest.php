<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateCombinacionRequest
 *
 * Valida los datos enviados al actualizar una combinación.
 *
 * @package App\Http\Requests
 *
 * @property int|null $id_skin ID de la skin (opcional)
 * @property int|null $id_elemento ID del elemento (opcional)
 * @property string|null $nombre_combinacion Nombre de la combinación (opcional, máx. 100 caracteres)
 */
class UpdateCombinacionRequest extends FormRequest
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
     * Reglas de validación para actualizar una combinación.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'id_skin' => 'sometimes|exists:skins,id',
            'id_elemento' => 'sometimes|exists:elementos,id',
            'nombre_combinacion' => 'sometimes|string|max:100',
        ];
    }
}
