<?php

namespace App\Livewire;

use Livewire\Component;

class Ubicacion extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.ubicacion');
    }
}
