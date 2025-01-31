<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreElementoRequest
 *
 * Valida los datos enviados al crear un nuevo elemento.
 *
 * @package App\Http\Requests
 *
 * @property string $nombre_elemento Nombre único del elemento
 * @property string|null $descripcion Descripción del elemento (opcional)
 * @property string $imagen_url URL de la imagen del elemento
 */
class StoreElementoRequest extends FormRequest
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
     * Reglas de validación para almacenar un elemento.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_elemento' => 'required|string|max:50|unique:elementos,nombre_elemento',
            'descripcion' => 'nullable|string',
            'imagen_url' => 'required|url',
        ];
    }
}
