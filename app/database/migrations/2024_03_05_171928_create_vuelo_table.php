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
        Schema::create('vuelo', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_salida');
            $table->date('fecha_llegada');

            // Comunicar con la tabla jet
            $table->foreignId('jet_id')->constrained('jet');

            // Comunicar con la tabla ciudad
            $table->foreignId('ciudad_origen_id')->constrained('ciudad');
            $table->foreignId('ciudad_destino_id')->constrained('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelo');
    }
};
