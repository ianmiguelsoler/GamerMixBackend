<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeria;
use App\Models\User;
use App\Models\Combinacion;

class GaleriaSeeder extends Seeder
{
    public function run(): void
    {
        $usuario = User::find(1);
        $combinacion = Combinacion::first();

        Galeria::create([
            'id_usuario' => $usuario->id,
            'id_combinacion' => $combinacion->id,
        ]);
    }
}
