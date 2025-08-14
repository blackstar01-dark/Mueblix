<?php

namespace App\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;

class DeleteProduct extends Component
{
    public $productoId;
    public $showModal = false;

    public function openModal($id)
    {
        $this->productoId = $id;
        $this->showModal = true;
    }

    public function delete()
    {
        Producto::findOrFail($this->productoId)->delete();
        $this->showModal = false;

        session()->flash('message', 'Producto eliminado');

        return redirect('producto/index-producto');
    }

    public function render()
    {
        return view('livewire.producto.delete-product');
    }
}
