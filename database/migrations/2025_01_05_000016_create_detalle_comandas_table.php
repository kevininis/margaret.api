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
        Schema::create('detalleComandas', function (Blueprint $table) {
            $table->increments('idDetalleComanda');
            $table->unsignedInteger('idComanda');
            $table->foreign('idComanda')->references('idComanda')->on('comandas')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('idPlatillo');
            $table->foreign('idPlatillo')->references('idPlatillo')->on('platillos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cantidadPlatillo');
            $table->unsignedInteger('idBebida');
            $table->foreign('idBebida')->references('idBebida')->on('bebidas')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleComandas');
    }
};
