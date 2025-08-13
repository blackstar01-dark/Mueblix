<?php

namespace App\Livewire\Empleados;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]

class IndexEmpleados extends Component
{
    public function render()
    {
        return view('livewire.empleados.index-empleados');
    }
}
