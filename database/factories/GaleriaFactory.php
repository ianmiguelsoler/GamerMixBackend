<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Combinacion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeria>
 */
class GaleriaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_usuario' => User::inRandomOrder()->first()->id ?? User::factory(),
            'id_combinacion' => Combinacion::inRandomOrder()->first()->id ?? Combinacion::factory(),
            'fecha_guardado' => now(),
        ];
    }
}
