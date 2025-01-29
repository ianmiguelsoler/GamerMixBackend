<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Combinacion;
use App\Models\Skin;
use App\Models\Elemento;

class CombinacionSeeder extends Seeder
{
    public function run(): void
    {
        $skin = Skin::first();
        $elemento = Elemento::first();

        Combinacion::create([
            'id_skin' => $skin->id,
            'id_elemento' => $elemento->id,
            'nombre_combinacion' => $skin->nombre_skin . ' ' . $elemento->nombre_elemento
        ]);
    }
}
