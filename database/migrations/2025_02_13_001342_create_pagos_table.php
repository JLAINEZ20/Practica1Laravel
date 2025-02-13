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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT
            $table->foreignId('reserva_id')->constrained('reservas')->onDelete('cascade'); // FOREIGN KEY
            $table->decimal('monto', 10, 2)->nullable(false); // DECIMAL(10,2) NOT NULL
            $table->enum('metodo_pago', ['tarjeta_credito', 'paypal', 'transferencia_bancaria'])->nullable(false); // ENUM NOT NULL
            $table->enum('estado', ['pendiente', 'completado', 'fallido'])->default('pendiente')->nullable(false); // ENUM NOT NULL
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
