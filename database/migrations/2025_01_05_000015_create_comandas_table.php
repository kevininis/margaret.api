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
        Schema::create('comandas', function (Blueprint $table) {
            $table->increments('idComanda');
            $table->unsignedInteger('idMesa');
            $table->foreign('idMesa')->references('idMesa')->on('mesas')->onUpdate('cascade')->onDelete('cascade');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedInteger('idEstado');
            $table->foreign('idEstado')->references('idEstado')->on('estados')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('idMesero');
            $table->foreign('idMesero')->references('idMesero')->on('meseros')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comandas');
    }
};
