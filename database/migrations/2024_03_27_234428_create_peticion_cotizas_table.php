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
        Schema::create('peticion_cotizas', function (Blueprint $table) {
            $table->id();
            $table->string('Cedula', 11);
            $table->string('Nombres', 500);
            $table->string('Correo', 500);
            $table->string('Direccion', 500);
            $table->string('Telefono', 500);
            $table->string('Servicio', 500);
            $table->double('Precio', 8,2);
            $table->string('Estado', 500);
            $table->date('dia_selec');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peticion_cotizas');
    }
};
