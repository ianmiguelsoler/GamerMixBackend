<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Logro;

/**
 * Class LogroUsuarioSeeder
 *
 * Seeder para asignar logros a los usuarios.
 *
 * @package Database\Seeders
 */
class LogroUsuarioSeeder extends Seeder
{
    /**
     * Ejecuta el seeder de relación entre usuarios y logros.
     *
     * @return void
     */
    public function run(): void
    {
        // Obtener todos los usuarios y logros
        $usuarios = User::all();
        $logros = Logro::all();

        // Verificar que existan usuarios y logros antes de asignar relaciones
        if ($usuarios->isNotEmpty() && $logros->isNotEmpty()) {
            $usuarios->each(function ($usuario) use ($logros) {
                // Asegurar que no intente tomar más logros de los que existen
                $cantidadLogros = min($logros->count(), rand(1, 3));

                // Asignar logros aleatorios al usuario
                $usuario->logros()->attach(
                    $logros->random($cantidadLogros)->pluck('id')->toArray(),
                    ['fecha_obtenido' => now()]
                );
            });
        }
    }
}
