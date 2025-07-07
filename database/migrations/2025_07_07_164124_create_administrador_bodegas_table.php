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
        Schema::create('administrador_bodegas', function (Blueprint $table) {
            $table->id('id_administrador_bodega');
            $table->timestamps();
            $table->string('nombre', length: 50)->nullable();
            $table->string('apellido', length: 50)->nullable();
            $table->string('curp', length: 18)->nullable();
            $table->string('rfc', length: 13)->nullable();
            $table->char('sexo', length: 10)->nullable();
            $table->integer('codigo_postal')->nullable();
            $table->string('calle', length: 50)->nullable();
            $table->integer('numero_calle')->nullable();
            $table->string('colonia', length: 50)->nullable();
            $table->string('ciudad', length: 50)->nullable();
            $table->string('estado', length: 50)->nullable();
            $table->integer('dia_nac')->nullable();
            $table->string('mes_nac', length: 10)->nullable();
            $table->integer('año_nac')->nullable();
            $table->string('telefono', length: 10)->nullable();
            $table->string('correo', length: 50)->nullable();
            $table->string('password', length: 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrador_bodegas');
    }
};
