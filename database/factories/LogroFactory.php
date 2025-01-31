<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class LogroFactory
 *
 * Factory para generar logros de prueba en la base de datos.
 *
 * @package Database\Factories
 *
 * @extends Factory<\App\Models\Logro>
 */
class LogroFactory extends Factory
{
    /**
     * Define los valores por defecto para la creación de logros.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_logro' => fake()->unique()->sentence(3), // Genera un nombre de logro aleatorio
            'descripcion' => fake()->sentence(), // Genera una descripción aleatoria
            'puntos' => fake()->numberBetween(5, 100), // Puntos aleatorios entre 5 y 100
        ];
    }
}
