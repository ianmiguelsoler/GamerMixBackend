<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateElementoRequest
 *
 * Valida los datos enviados al actualizar un elemento.
 *
 * @package App\Http\Requests
 *
 * @property string|null $nombre_elemento Nombre único del elemento (opcional, máx. 50 caracteres)
 * @property string|null $descripcion Descripción del elemento (opcional)
 * @property string|null $imagen_url URL de la imagen del elemento (opcional)
 */
class UpdateElementoRequest extends FormRequest
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
     * Reglas de validación para actualizar un elemento.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_elemento' => 'sometimes|string|max:50|unique:elementos,nombre_elemento,' . $this->elemento->id,
            'descripcion' => 'nullable|string',
            'imagen_url' => 'sometimes|url',
        ];
    }
}
