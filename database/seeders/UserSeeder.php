<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un usuario de prueba
        User::create([
            'nombre_usuario' => 'admin', // Cambio de 'name' a 'nombre_usuario'
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'nivel' => 10,
            'experiencia' => 5000,
        ]);


        // Crear varios usuarios usando una Factory
        User::factory(10)->create();
    }
}
