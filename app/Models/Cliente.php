<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'curp',
        'sexo',
        'calle',
        'numero',
        'codigo_postal',
        'cuidad',
        'colonia',
        'estado',
        'dia_nac',
        'mes_nac',
        'ano_nac',
        'correo',
        'telefono',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',

    ];

    protected $primaryKey = 'id_cliente';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $casts = [

    ];
}
