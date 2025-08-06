<?php

namespace App\Livewire\Clientes;

use App\Livewire\Forms\ClienteForm;
use App\Models\Cliente;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Session;


class CreateClient extends Component
{
    public ClienteForm $cliente;

    public function save(){
        $this->cliente->store();

        Session::flash("success", "Cliente creado correctamente");

        return redirect('/');
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.clientes.create-client');
    }
}
