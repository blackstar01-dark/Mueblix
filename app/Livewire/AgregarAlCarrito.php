<?php

namespace App\Livewire;

use Livewire\Component;

class AgregarAlCarrito extends Component
{
    public $producto; 
    public $cart = [];
    public $total = 0;

    public function mount($producto) { 
        $this->producto = $producto;
        $this->cart = session('cart', []);
        $this->calcularTotal();
    }

    public function agregarProducto() {
        $id = $this->producto->id;
        $nombre = $this->producto->nombre;
        $precio = $this->producto->precio;

        if(isset($this->cart[$id])) {
            $this->cart[$id]['cantidad']++;
        } else {
            $this->cart[$id] = [
                'nombre' => $nombre,
                'precio' => $precio,
                'cantidad' => 1,
            ];
        }

        session(['cart' => $this->cart]);
        $this->calcularTotal();


    }

    public function calcularTotal() {
        $this->total = 0;
        foreach ($this->cart as $item) {
            $this->total += $item['precio'] * $item['cantidad'];
        }
    }



    public function render()
    {
        return view('livewire.agregar-al-carrito');
    }
}
