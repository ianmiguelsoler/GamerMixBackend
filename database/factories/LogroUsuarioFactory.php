<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Logro;
use App\Models\LogroUsuario;

class LogroUsuarioFactory extends Factory
{
    protected $model = LogroUsuario::class;

    public function definition(): array
    {
        return [
            'id_usuario' => User::inRandomOrder()->first()->id ?? User::factory(),
            'id_logro' => Logro::inRandomOrder()->first()->id ?? Logro::factory(),
            'fecha_obtenido' => now(),
        ];
    }
}
