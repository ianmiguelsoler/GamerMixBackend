<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ElementoFactory
 *
 * Factory para generar elementos de prueba en la base de datos.
 *
 * @package Database\Factories
 *
 * @extends Factory<\App\Models\Elemento>
 */
class ElementoFactory extends Factory
{
    /**
     * Define los valores por defecto para la creación de elementos.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_elemento' => fake()->unique()->word(), // Genera un nombre único
            'descripcion' => fake()->sentence(), // Genera una descripción aleatoria
            'imagen_url' => fake()->imageUrl(200, 200, 'nature', true), // URL de imagen simulada
        ];
    }
}
