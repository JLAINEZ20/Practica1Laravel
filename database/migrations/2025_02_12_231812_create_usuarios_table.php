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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre', 255)->nullable(false); 
            $table->string('email', 255)->unique()->nullable(false); 
            $table->string('password', 255)->nullable(false); 
            $table->string('telefono', 20)->nullable(); 
            $table->enum('rol', ['admin', 'recepcionista'])->default('recepcionista'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
