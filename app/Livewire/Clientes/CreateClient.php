<?php

namespace App\Livewire\Clientes;

use App\Livewire\Forms\ClienteForm;
use App\Models\cliente;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;


class CreateClient extends Component
{
    public ClienteForm $cliente;

    public function save(){
        $this->cliente->store();

        return $this->redirect("/clientes/index");
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.clientes.create-client');
    }
}
