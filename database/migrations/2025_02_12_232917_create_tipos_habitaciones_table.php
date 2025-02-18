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
        Schema::create('tipos_habitaciones', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre', 255)->nullable(false); 
            $table->text('descripcion')->nullable();
            $table->decimal('precio_noche', 10, 2)->nullable(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_habitaciones');
    }
};
