<?php

namespace App\Livewire\Producto;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard')]
class IndexProducto extends Component
{
    public $title = 'Listado de Productos';

    public function render()
    {
        return view('livewire.producto.index-producto', [
            'title' => $this->title,
        ]);

    }
}
