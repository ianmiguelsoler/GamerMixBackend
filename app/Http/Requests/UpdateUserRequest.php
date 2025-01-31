<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateUserRequest
 *
 * Valida los datos enviados al actualizar un usuario.
 *
 * @package App\Http\Requests
 *
 * @property string|null $nombre_usuario Nombre único del usuario (opcional, máx. 50 caracteres)
 * @property string|null $email Correo electrónico único del usuario (opcional, máx. 100 caracteres)
 * @property string|null $password Nueva contraseña del usuario (opcional, mínimo 8 caracteres)
 * @property int|null $nivel Nivel del usuario (opcional, mínimo 1, máximo 100)
 * @property int|null $experiencia Experiencia del usuario (opcional, mínimo 0)
 */
class UpdateUserRequest extends FormRequest
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
     * Reglas de validación para actualizar un usuario.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_usuario' => 'sometimes|string|max:50|unique:users,nombre_usuario,' . $this->user->id,
            'email' => 'sometimes|email|max:100|unique:users,email,' . $this->user->id,
            'password' => 'nullable|string|min:8',
            'nivel' => 'sometimes|integer|min:1|max:100',
            'experiencia' => 'sometimes|integer|min:0',
        ];
    }
}
