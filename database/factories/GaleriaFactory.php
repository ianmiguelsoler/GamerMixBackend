<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Combinacion;

/**
 * Class GaleriaFactory
 *
 * Factory para generar registros en la galería de combinaciones guardadas por los usuarios.
 *
 * @package Database\Factories
 *
 * @extends Factory<\App\Models\Galeria>
 */
class GaleriaFactory extends Factory
{
    /**
     * Define los valores por defecto para la creación de registros en la galería.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => User::inRandomOrder()->first()->id ?? User::factory(), // Usuario aleatorio o factory
            'id_combinacion' => Combinacion::inRandomOrder()->first()->id ?? Combinacion::factory(), // Combinación aleatoria o factory
            'fecha_guardado' => now(), // Fecha actual
        ];
    }
}
