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
        Schema::create('vuelo_usuario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('vuelo_id');

            $table->foreign('usuario_id')
                  ->references('id')->on('usuario')
                  ->onDelete('cascade');

            $table->foreign('vuelo_id')
                  ->references('id')->on('vuelo')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelo_usuario');
    }
};
