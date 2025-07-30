<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class LoginClient extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.clientes.login-client');
    }
}
