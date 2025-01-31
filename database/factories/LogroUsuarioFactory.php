<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Logro;
use App\Models\LogroUsuario;

/**
 * Class LogroUsuarioFactory
 *
 * Factory para generar relaciones entre usuarios y logros.
 *
 * @package Database\Factories
 *
 * @extends Factory<\App\Models\LogroUsuario>
 */
class LogroUsuarioFactory extends Factory
{
    /**
     * Define los valores por defecto para la creación de relaciones usuario-logro.
     *
     * @return array<string, mixed>
     */
    protected $model = LogroUsuario::class;

    public function definition(): array
    {
        return [
            'id_usuario' => User::inRandomOrder()->first()->id ?? User::factory(), // Usuario aleatorio o factory
            'id_logro' => Logro::inRandomOrder()->first()->id ?? Logro::factory(), // Logro aleatorio o factory
            'fecha_obtenido' => now(), // Fecha actual
        ];
    }
}
