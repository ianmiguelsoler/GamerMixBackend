<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 *
 * Seeder principal que llama a otros seeders para poblar la base de datos.
 *
 * @package Database\Seeders
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Ejecuta todos los seeders necesarios para la base de datos.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SkinSeeder::class,
            ElementoSeeder::class,
            CombinacionSeeder::class,
            GaleriaSeeder::class,
            LogroSeeder::class,
            LogroUsuarioSeeder::class,
        ]);
    }
}
