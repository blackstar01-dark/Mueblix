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
        Schema::create('administradors', function (Blueprint $table) {
            $table->id('id_administrador');
            $table->timestamps();
            $table->rememberToken();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('curp');
            $table->string('sexo');
            $table->string('calle');
            $table->integer('numero');
            $table->integer('codigo_postal')->unique();
            $table->string('cuidad');
            $table->string('colonia');
            $table->string('estado');
            $table->string('dia_nac');
            $table->string('mes_nac');
            $table->integer('ano_nac');
            $table->string('correo')->unique();
            $table->string('rfc')->unique();
            $table->string('telefono')->unique();
            $table->string('password');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradors');
    }
};
