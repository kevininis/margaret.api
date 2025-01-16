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
        Schema::create('platillos', function (Blueprint $table) {
            $table->increments('idPlatillo');
            $table->string('nombrePlatillo', 50);
            $table->decimal('precioPlatillo', 10, 2);
            $table->unsignedInteger('idReceta');
            $table->foreign('idReceta')->references('idReceta')->on('recetas')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('idCategoriaPlatillo');
            $table->foreign('idCategoriaPlatillo')->references('idCategoria')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platillos');
    }
};
