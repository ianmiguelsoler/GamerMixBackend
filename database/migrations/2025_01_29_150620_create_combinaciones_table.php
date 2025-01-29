<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('combinaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_skin')->constrained('skins')->onDelete('cascade');
            $table->foreignId('id_elemento')->constrained('elementos')->onDelete('cascade');
            $table->string('nombre_combinacion', 100);
            $table->timestamp('fecha_creacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combinaciones'); // Corregido
    }
};
