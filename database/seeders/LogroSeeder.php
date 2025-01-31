<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Logro;

/**
 * Class LogroSeeder
 *
 * Seeder para poblar la base de datos con logros iniciales.
 *
 * @package Database\Seeders
 */
class LogroSeeder extends Seeder
{
    /**
     * Ejecuta el seeder de logros.
     *
     * @return void
     */
    public function run(): void
    {
        Logro::create([
            'nombre_logro' => 'Primer Combinación',
            'descripcion' => 'Creaste tu primera combinación',
            'puntos' => 10
        ]);

        Logro::create([
            'nombre_logro' => 'Maestro de las Skins',
            'descripcion' => 'Desbloqueaste 10 skins',
            'puntos' => 50
        ]);
    }
}
