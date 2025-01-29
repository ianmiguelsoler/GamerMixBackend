<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skin>
 */
class SkinFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre_skin' => fake()->unique()->word(),
            'descripcion' => fake()->sentence(),
            'imagen_url' => fake()->imageUrl(200, 200, 'game', true),
        ];
    }
}
