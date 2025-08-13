<?php

namespace App\Livewire\Empleados;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Validation\ValidationException;

class LoginEmpleados extends Component
{
    use RefreshDatabase;

    public $correo = '';
    public $password = '';

    protected $rules = [
        'correo' => 'required|email',
        'password' => 'required',
    ];

    public function login(){
        $this->validate();

        if(! Auth::guard('empleados')->attempt([
            'correo' => $this->correo, 'password' => $this->password])
        ){
            throw ValidationException::withMessages([
                'correo' => __('auth.failed'),
            ]);
        }

        return redirect()->intended('/');
    }

    public function render()
    {
        return view('livewire.empleados.login-empleados');
    }
}
