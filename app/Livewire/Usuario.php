<?php

namespace App\Livewire;

use Livewire\Component;
use function Livewire\Volt\layout;

class Usuario extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.usuario');
    }
}
