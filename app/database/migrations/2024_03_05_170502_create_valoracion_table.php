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
        Schema::create('valoracion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('puntuacion');
            $table->string('comentario');

            // Comunicar con la tabla usuario
            $table->foreignId('usuario_id')->constrained('usuario')->cascadeOnDelete();

            // Comunicar con el jet
            $table->foreignId('jet_id')->constrained('jet')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valoracion');
    }
};
