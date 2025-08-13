<?php

namespace App\Livewire\Forms;

use App\Models\Empleado;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Hash;

class EmpleadoForm extends Form
{
    #[Validate('required|string|min:3|max:255')]
    public $nombres = '';

    #[Validate('required|string|min:3|max:255')]
    public $apellidos = '';

    #[Validate('required|alpha_num|size:18')]
    public $curp = '';

    #[Validate('required|alpha_num|size:13')]
    public $rfc = '';

    #[Validate('required|string|max:10|in:Masculino,Femenino')]
    public $sexo = '';

    #[Validate('required|string|max:255')]
    public $calle = '';

    #[Validate('required')]
    public $telefono = '';

    #[Validate('required|integer|digits_between:1,10')]
    public $numero = '';

    #[Validate('required|integer|digits:5')]
    public $codigo_postal = '';

    #[Validate('required|string|max:255')]
    public $cuidad = '';

    #[Validate('required|string|max:255')]
    public $colonia = '';

    #[Validate('required|string|max:255')]
    public $estado = '';

    #[Validate('required|integer|max:31')]
    public $dia_nac  = '';

    #[Validate('required|integer|max:12')]
    public $mes_nac  = '';

    #[Validate('required|integer|max:2005')]
    public $ano_nac  = '';

    #[Validate('required|email')]
    public $correo = '';

    #[Validate('required|string|max:2006')]
    public $password = '';

    public function store(){
        $this->validate();

        $user = Empleado::create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'curp' => $this->curp,
            'rfc' => $this->rfc,
            'sexo' => $this->sexo,
            'calle' => $this->calle,
            'numero' => $this->numero,
            'codigo_postal' => $this->codigo_postal,
            'cuidad' => $this->cuidad,
            'colonia' => $this->colonia,
            'estado' => $this->estado,
            'dia_nac' => $this->dia_nac,
            'mes_nac' => $this->mes_nac,
            'ano_nac' => $this->ano_nac,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'password' => Hash::make($this->password),
        ]);
    }
}
