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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleados');
            $table->rememberToken();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('curp')->unique();
            $table->string('sexo');
            $table->string('calle');
            $table->integer('numero');
            $table->integer('codigo_postal');
            $table->string('cuidad');
            $table->string('colonia');
            $table->string('estado');
            $table->integer('dia_nac');
            $table->integer('mes_nac');
            $table->integer('ano_nac');
            $table->string('rfc');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
