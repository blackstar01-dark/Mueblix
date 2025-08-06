<?php

namespace App\Livewire\Clientes;

use Livewire\Component;
use App\Livewire\Forms\LoginClienteForm;


class LoginClient extends Component
{
    public LoginClienteForm $login;


    public function login(){

        if($this->login->store()) {
            return $this->redirect('/');
        }
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.clientes.login-client');
    }
}
