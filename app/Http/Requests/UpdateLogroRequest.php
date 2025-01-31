<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateLogroRequest
 *
 * Valida los datos enviados al actualizar un logro.
 *
 * @package App\Http\Requests
 *
 * @property string|null $nombre_logro Nombre único del logro (opcional, máx. 100 caracteres)
 * @property string|null $descripcion Descripción del logro (opcional)
 * @property int|null $puntos Puntos otorgados por el logro (opcional, mínimo 0)
 */
class UpdateLogroRequest extends FormRequest
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
     * Reglas de validación para actualizar un logro.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_logro' => 'sometimes|string|max:100|unique:logros,nombre_logro,' . $this->logro->id,
            'descripcion' => 'nullable|string',
            'puntos' => 'sometimes|integer|min:0',
        ];
    }
}
