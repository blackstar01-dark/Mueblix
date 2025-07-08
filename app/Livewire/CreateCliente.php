<?php

namespace App\Livewire;

use App\Livewire\Forms\ClienteForm;
use App\Models\cliente;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCliente extends Component
{

    public ClienteForm $form;

    public function save(){
        $this->form->store();

        return redirect()->route('clientes.index');
    }


    public function render()
    {
        return view('livewire.create-cliente');
    }
}
