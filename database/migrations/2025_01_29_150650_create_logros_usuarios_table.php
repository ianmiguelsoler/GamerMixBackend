<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('logros_usuarios', function (Blueprint $table) {
            $table->foreignId('id_usuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_logro')->constrained('logros')->onDelete('cascade');
            $table->timestamp('fecha_obtenido')->useCurrent();

            $table->primary(['id_usuario', 'id_logro']); // Clave primaria compuesta
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('logros_usuarios');
    }
};
