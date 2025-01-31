<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCombinacionRequest
 *
 * Valida los datos enviados al crear una nueva combinación.
 *
 * @package App\Http\Requests
 *
 * @property int $id_skin ID de la skin utilizada en la combinación
 * @property int $id_elemento ID del elemento utilizado en la combinación
 * @property string $nombre_combinacion Nombre de la combinación generada
 */
class StoreCombinacionRequest extends FormRequest
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
     * Reglas de validación para almacenar una combinación.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'id_skin' => 'required|exists:skins,id', // Verifica que la skin exista en la tabla skins
            'id_elemento' => 'required|exists:elementos,id', // Verifica que el elemento exista en la tabla elementos
            'nombre_combinacion' => 'required|string|max:100', // Debe ser una cadena con un máximo de 100 caracteres
        ];
    }
}
