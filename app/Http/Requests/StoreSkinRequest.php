<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSkinRequest
 *
 * Valida los datos enviados al crear una nueva skin.
 *
 * @package App\Http\Requests
 *
 * @property string $nombre_skin Nombre único de la skin
 * @property string|null $descripcion Descripción de la skin (opcional)
 * @property string $imagen_url URL de la imagen de la skin
 */
class StoreSkinRequest extends FormRequest
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
     * Reglas de validación para almacenar una skin.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_skin' => 'required|string|max:50|unique:skins,nombre_skin',
            'descripcion' => 'nullable|string',
            'imagen_url' => 'required|url',
        ];
    }
}
