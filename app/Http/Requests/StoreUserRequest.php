<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreUserRequest
 *
 * Valida los datos enviados al crear un nuevo usuario.
 *
 * @package App\Http\Requests
 *
 * @property string $nombre_usuario Nombre único del usuario
 * @property string $email Correo electrónico único del usuario
 * @property string $password Contraseña del usuario (mínimo 8 caracteres)
 * @property int|null $nivel Nivel del usuario (opcional, mínimo 1, máximo 100)
 * @property int|null $experiencia Experiencia del usuario (opcional, mínimo 0)
 */
class StoreUserRequest extends FormRequest
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
     * Reglas de validación para almacenar un usuario.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'nombre_usuario' => 'required|string|max:50|unique:users,nombre_usuario',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:8',
            'nivel' => 'integer|min:1|max:100',
            'experiencia' => 'integer|min:0',
        ];
    }
}
