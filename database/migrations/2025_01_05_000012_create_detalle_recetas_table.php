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
        Schema::create('detalleRecetas', function (Blueprint $table) {
            $table->increments('idDetalleReceta');

            $table->unsignedInteger('idReceta');
            $table->foreign('idReceta')->references('idReceta')->on('recetas')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('idIngrediente');
            $table->foreign('idIngrediente')->references('idIngrediente')->on('ingredientes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleRecetas');
    }
};
