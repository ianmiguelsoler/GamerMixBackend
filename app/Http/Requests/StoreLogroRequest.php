<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreLogroRequest
 *
 * Valida los datos enviados al crear un nuevo logro.
 *
 * @package App\Http\Requests
 *
 * @property string $nombre_logro Nombre único del logro
 * @property string|null $descripcion Descripción del logro (opcional)
 * @property int $puntos Puntos otorgados por el logro
 */
class StoreLogroRequest extends FormRequest
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
     * Reglas de validación para almacenar un logro.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_logro' => 'required|string|max:100|unique:logros,nombre_logro',
            'descripcion' => 'nullable|string',
            'puntos' => 'integer|min:0',
        ];
    }
}
