<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_elemento', 50)->unique();
            $table->text('descripcion')->nullable();
            $table->string('imagen_url', 255);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('combinaciones'); // Elimina primero las combinaciones
        Schema::dropIfExists('elementos'); // Luego elimina los elementos
    }
};
