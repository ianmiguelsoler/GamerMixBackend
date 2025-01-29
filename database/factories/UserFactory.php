<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre_usuario' => fake()->userName(), // Corrección aquí
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'nivel' => fake()->numberBetween(1, 10),
            'experiencia' => fake()->numberBetween(0, 5000),
            'remember_token' => Str::random(10),
        ];
    }
}
