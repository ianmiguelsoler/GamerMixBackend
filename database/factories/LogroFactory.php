<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Logro>
 */
class LogroFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre_logro' => fake()->unique()->sentence(3),
            'descripcion' => fake()->sentence(),
            'puntos' => fake()->numberBetween(5, 100),
        ];
    }
}
