<?php

namespace App\Livewire\Producto;

use App\Models\Producto;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class SearchProduct extends Component
{
    public $searchText = '';

    public function updatedSearchText($value)
    {
        $this->emit('filtroProductos', $value);
    }

    public function render(){
        return view('livewire.producto.search-product');
    }
}
