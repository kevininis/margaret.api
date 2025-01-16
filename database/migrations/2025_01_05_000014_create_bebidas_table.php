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
        Schema::create('bebidas', function (Blueprint $table) {
            $table->increments('idBebida');
            $table->string('nombreBebida', 50);
            $table->string('descripcionBebida', 200);
            $table->decimal('precioBebida', 12, 2);
            $table->unsignedInteger('idCategoriaBebida');
            $table->foreign('idCategoriaBebida')->references('idCategoria')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebidas');
    }
};
