<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'curp', 'sexo', 'codigo_postal', 'calle', 'numero_calle', 'colonia', 'ciudad', 'estado', 'dia_nac', 'mes_nac', 'año_nac', 'telefono', 'correo', 'password'];
}
