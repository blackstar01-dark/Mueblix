<?php

namespace App\Livewire\Producto;

use App\Models\Producto;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class SearchProduct extends Component
{
    public $searchText = '';
    public $results = [];

    public function updatingSearchText() {
        $search = '%' .$this->searchText. '%';

        $this->results = Producto::where('nombre', 'like', $search)->get();
    }

    public function render()
    {
        return view('livewire.producto.search-product');
    }
}
