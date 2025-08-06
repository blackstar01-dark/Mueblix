<?php

namespace App\Livewire\Forms;

use App\Livewire\Clientes\LoginClient;
use App\Models\Cliente;
use Illuminate\Auth\Events\Login;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;

class LoginClienteForm extends Form
{
    #[Validate('required')]
    public  $correo = '';

    #[Validate('required')]
    public  $password = '';

    public function mount(){
        $this->login = new LoginClienteForm();
    }

    public function store() {
        $this->validate();

        if (Auth::guard('clientes')->attempt(['correo' => $this->correo, 'password' => $this->password])) {
            if (request()->hasSession()) {
                request()->session()->regenerate();
            }
            return true;
        }

        throw ValidationException::withMessages([
            'correo' => 'Correo incorrecto',
            'password' => 'password incorrecto',
        ]);
    }
}
