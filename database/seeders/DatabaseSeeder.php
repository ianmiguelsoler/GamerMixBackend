<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
