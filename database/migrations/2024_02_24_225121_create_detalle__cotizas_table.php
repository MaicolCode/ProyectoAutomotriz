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
        Schema::create('detalle__cotizas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cotizacion_id')->constrained(
                table:'cotizacions', indexName:'detalles_cotizacion_id'
            );
            $table->foreignId('producto_id')->constrained(
                table:'productos', indexName:'detalles_producto_id'
            );
            $table->integer('Cantidad');
            $table->double('Subtotal',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__cotizas');
    }
};
