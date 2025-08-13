<?php

namespace App\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;

#[Layout('components.layouts.app')]
class CardsProductos extends Component
{
    public function render()
    {
        $productos = Producto::all();
        return view('livewire.producto.cards-productos', compact('productos'));
    }
}
