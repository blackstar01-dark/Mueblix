<?php

namespace App\Livewire\Empleados;

use App\Livewire\Forms\EmpleadoForm;
use Livewire\Component;

class CreateEmpleados extends Component
{


    public EmpleadoForm $form;

    public bool $showModal = false;

    public function openModal(){
        $this->showModal = true;
    }

    public function closeModal(){
        $this->showModal = false;
    }

    public function save(){
        $this->form->store();

        $this->showModal = false;

    }

    public function render()
    {
        return view('livewire.empleados.create-empleados');
    }
}
