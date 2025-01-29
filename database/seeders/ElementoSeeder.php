<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Elemento;

class ElementoSeeder extends Seeder
{
    public function run(): void
    {
        Elemento::create([
            'nombre_elemento' => 'Fuego',
            'descripcion' => 'Elemento de fuego ardiente',
            'imagen_url' => 'https://example.com/fuego.png'
        ]);

        Elemento::create([
            'nombre_elemento' => 'Hielo',
            'descripcion' => 'Elemento de hielo gélido',
            'imagen_url' => 'https://example.com/hielo.png'
        ]);
    }
}
