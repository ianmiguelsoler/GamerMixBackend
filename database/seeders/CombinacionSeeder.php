<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Combinacion;
use App\Models\Skin;
use App\Models\Elemento;

/**
 * Class CombinacionSeeder
 *
 * Seeder para generar combinaciones iniciales en la base de datos.
 *
 * @package Database\Seeders
 */
class CombinacionSeeder extends Seeder
{
    /**
     * Ejecuta el seeder de combinaciones.
     *
     * @return void
     */
    public function run(): void
    {
        $skin = Skin::first();
        $elemento = Elemento::first();

        if ($skin && $elemento) {
            Combinacion::create([
                'id_skin' => $skin->id,
                'id_elemento' => $elemento->id,
                'nombre_combinacion' => $skin->nombre_skin . ' ' . $elemento->nombre_elemento
            ]);
        }
    }
}
