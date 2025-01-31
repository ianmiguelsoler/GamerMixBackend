<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class SkinFactory
 *
 * Factory para generar skins de prueba en la base de datos.
 *
 * @package Database\Factories
 *
 * @extends Factory<\App\Models\Skin>
 */
class SkinFactory extends Factory
{
    /**
     * Define los valores por defecto para la creación de skins.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_skin' => fake()->unique()->word(), // Nombre único para la skin
            'descripcion' => fake()->sentence(), // Descripción aleatoria
            'imagen_url' => fake()->imageUrl(200, 200, 'game', true), // URL de imagen simulada
        ];
    }
}
