<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skin;

/**
 * Class SkinSeeder
 *
 * Seeder para poblar la base de datos con skins iniciales.
 *
 * @package Database\Seeders
 */
class SkinSeeder extends Seeder
{
    /**
     * Ejecuta el seeder de skins.
     *
     * @return void
     */
    public function run(): void
    {
        Skin::create([
            'nombre_skin' => 'Diana',
            'descripcion' => 'Skin base de Diana',
            'imagen_url' => 'https://example.com/diana.png'
        ]);

        Skin::create([
            'nombre_skin' => 'Shadow Warrior',
            'descripcion' => 'Skin de un guerrero oscuro',
            'imagen_url' => 'https://example.com/shadow.png'
        ]);
    }
}
