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
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained(
                table:'clientes', indexName:'cotizacions_cliente_id'
            )
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('FCreacion');
            $table->string('Cliente');
            $table->string('CCorreo');
            $table->string('CTelefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizacions');
    }
};
