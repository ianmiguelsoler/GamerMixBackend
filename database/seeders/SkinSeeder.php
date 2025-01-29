<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skin;

class SkinSeeder extends Seeder
{
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
