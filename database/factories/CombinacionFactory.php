<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skin;
use App\Models\Elemento;

/**
 * Class CombinacionFactory
 *
 * Factory para generar combinaciones aleatorias de skins y elementos.
 *
 * @package Database\Factories
 *
 * @extends Factory<\App\Models\Combinacion>
 */
class CombinacionFactory extends Factory
{
    /**
     * Define los valores por defecto para la creación de combinaciones.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_skin' => Skin::inRandomOrder()->first()->id ?? Skin::factory(), // Skin aleatoria o factory
            'id_elemento' => Elemento::inRandomOrder()->first()->id ?? Elemento::factory(), // Elemento aleatorio o factory
            'nombre_combinacion' => fake()->word() . ' ' . fake()->word(), // Genera un nombre aleatorio
            'fecha_creacion' => now(), // Fecha actual
        ];
    }
}
