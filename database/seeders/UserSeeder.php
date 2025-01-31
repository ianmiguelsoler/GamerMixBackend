<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/**
 * Class UserSeeder
 *
 * Seeder para poblar la base de datos con usuarios de prueba.
 *
 * @package Database\Seeders
 */
class UserSeeder extends Seeder
{
    /**
     * Ejecuta el seeder de usuarios.
     *
     * @return void
     */
    public function run(): void
    {
        // Crear un usuario administrador
        User::create([
            'nombre_usuario' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'nivel' => 10,
            'experiencia' => 5000,
        ]);

        // Crear varios usuarios de prueba usando Factory
        User::factory(10)->create();
    }
}
