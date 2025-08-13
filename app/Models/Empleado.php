<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Empleado extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'curp',
        'rfc',
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

        protected $primaryKey = 'id_administrador';

        public $incrementing = 'true';

        protected $keyType = 'int';

        public $casts = [

        ];

        public function getAuthIdentifierName(){
            return 'id_empleados';
        }
}
