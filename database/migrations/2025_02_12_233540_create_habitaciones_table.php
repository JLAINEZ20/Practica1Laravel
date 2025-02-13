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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT
            $table->string('numero', 50)->unique()->nullable(false); // UNIQUE, NOT NULL
            $table->foreignId('tipo_id')->constrained('tipos_habitaciones')->onDelete('cascade'); // FOREIGN KEY
            $table->enum('estado', ['disponible', 'ocupada', 'mantenimiento'])->nullable(false); // ENUM NOT NULL
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
