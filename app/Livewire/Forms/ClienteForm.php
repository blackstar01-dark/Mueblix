<?php

namespace App\Livewire\Forms;

use App\Models\cliente;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ClienteForm extends Form
{
    public ?Cliente $cliente;

    #[Validate('required')]
    public $nombre = '';

    #[Validate('required')]
    public $apellido = '';

    #[Validate('required')]
    public $curp = '';

    #[Validate('required')]
    public $sexo = '';

    #[Validate('required')]
    public $codigo_postal = '';

    #[Validate('required')]
    public $calle = '';

    #[Validate('required')]
    public $numero_calle = '';

    #[Validate('required')]
    public $colonia = '';

    #[Validate('required')]
    public $cuidad = '';

    #[Validate('required')]
    public $estado = '';

    #[Validate('required')]
    public $dia_nac = '';

    #[Validate('required')]
    public $mes_nac = '';

    #[Validate('required')]
    public $año_nac = '';

    #[Validate('required')]
    public $telefono = '';

    #[Validate('required')]
    public $correo = '';

    #[Validate('required')]
    public $password = '';

   public function store()
   {
       $this->validate();

       Cliente::create(
           $this->cliente->all()
       );

       return redirect()->route('clientes.index');
   }
}
