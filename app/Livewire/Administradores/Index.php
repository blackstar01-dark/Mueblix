<?php

namespace App\Livewire\Administradores;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {

        return view('livewire.administradores.index');
    }
}
