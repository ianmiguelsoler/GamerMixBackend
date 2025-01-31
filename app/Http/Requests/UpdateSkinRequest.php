<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateSkinRequest
 *
 * Valida los datos enviados al actualizar una skin.
 *
 * @package App\Http\Requests
 *
 * @property string|null $nombre_skin Nombre único de la skin (opcional, máx. 50 caracteres)
 * @property string|null $descripcion Descripción de la skin (opcional)
 * @property string|null $imagen_url URL de la imagen de la skin (opcional)
 */
class UpdateSkinRequest extends FormRequest
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
     * Reglas de validación para actualizar una skin.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_skin' => 'sometimes|string|max:50|unique:skins,nombre_skin,' . $this->skin->id,
            'descripcion' => 'nullable|string',
            'imagen_url' => 'sometimes|url',
        ];
    }
}
