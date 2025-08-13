<?php

namespace App\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;

class ListProduct extends Component
{
    public $search = '';



    protected $listeners = ['productos-agregados' => '$refresh',
        'filtroProductos' => 'actualizarFiltro'
    ];

    public function actualizarFiltro($valor){
        $this->search = $valor;
    }

    public function render()
    {
        $producto = Producto::query()
            ->when($this->search, function ($query) {
                $query->where('nombre', 'like', "%{$this->search}%")
                    ->orWhere('categoria', 'like', "%{$this->search}%")
                    ->orWhere('descripcion', 'like', "%{$this->search}%");
            })
            ->latest()
            ->get();

        return view('livewire.producto.list-product', [
            'productos' => $producto,
        ]);
    }
}
