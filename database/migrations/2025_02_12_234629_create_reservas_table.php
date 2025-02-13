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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade'); 
            $table->foreignId('habitacion_id')->constrained('habitaciones')->onDelete('cascade'); 
            $table->date('fecha_entrada')->nullable(false); 
            $table->date('fecha_salida')->nullable(false); 
            $table->enum('estado', ['pendiente', 'confirmada', 'cancelada'])->default('pendiente')->nullable(false); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};  
