<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Class UserFactory
 *
 * Factory para generar usuarios de prueba en la base de datos.
 *
 * @package Database\Factories
 *
 * @extends Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define los valores por defecto para la creación de usuarios.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_usuario' => fake()->userName(), // Genera un nombre de usuario aleatorio
            'email' => fake()->unique()->safeEmail(), // Genera un correo único
            'password' => Hash::make('password'), // Contraseña encriptada
            'nivel' => fake()->numberBetween(1, 10), // Nivel entre 1 y 10
            'experiencia' => fake()->numberBetween(0, 5000), // Experiencia entre 0 y 5000
            'remember_token' => Str::random(10), // Token aleatorio
        ];
    }
}
