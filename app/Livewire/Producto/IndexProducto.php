<?php

namespace App\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard')]
class IndexProducto extends Component
{
    public $title = 'Listado de Productos';

    public function render()
    {
        $productos = Producto::all();

        return view('livewire.producto.index-producto', [
            'productos' => $productos,
        ]);

    }
}
