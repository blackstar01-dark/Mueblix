<?php

namespace App\Livewire\Actions;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutCliente extends Component
{
    public function logout()
    {
        Auth::guard('clientes')->logout();

        Session::invalidate();
        Session::regenerateToken();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.actions.logout-cliente');
    }
}
