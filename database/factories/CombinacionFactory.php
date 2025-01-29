<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skin;
use App\Models\Elemento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Combinacion>
 */
class CombinacionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_skin' => Skin::inRandomOrder()->first()->id ?? Skin::factory(),
            'id_elemento' => Elemento::inRandomOrder()->first()->id ?? Elemento::factory(),
            'nombre_combinacion' => fake()->word() . ' ' . fake()->word(),
            'fecha_creacion' => now(),
        ];
    }
}
