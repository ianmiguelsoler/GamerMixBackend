<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeria;
use App\Models\User;
use App\Models\Combinacion;

/**
 * Class GaleriaSeeder
 *
 * Seeder para poblar la base de datos con combinaciones guardadas en la galería.
 *
 * @package Database\Seeders
 */
class GaleriaSeeder extends Seeder
{
    /**
     * Ejecuta el seeder de la galería.
     *
     * @return void
     */
    public function run(): void
    {
        $usuario = User::find(1);
        $combinacion = Combinacion::first();

        if ($usuario && $combinacion) {
            Galeria::create([
                'id_usuario' => $usuario->id,
                'id_combinacion' => $combinacion->id,
            ]);
        }
    }
}
