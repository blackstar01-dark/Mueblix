<?php

namespace App\Livewire\Administradores;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginAdmin extends Component
{
    public $correo = '';
    public $password = '';
    public $remember = false;

    protected $rules = [
        'correo' => 'required|email',
        'password' => 'required|string|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (! Auth::guard('administradores')->attempt([
            'correo' => $this->correo,
            'password' => $this->password,
        ], $this->remember)) {
            throw ValidationException::withMessages([
                'correo' => __('auth.failed'),
            ]);
        }

        return redirect()->intended('/');
    }

    public function render()
    {
        return view('livewire.administradores.login-admin');
    }
}
