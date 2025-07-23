<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombres', 'apellidos', 'curp', 'sexo', 'calle', 'numero', 'codigo_postal', 'colonia', 'cuidad', 'estado', 'dia_nac', 'mes_nac', 'ano_nac', 'correo', 'telefono', 'password'];
}
