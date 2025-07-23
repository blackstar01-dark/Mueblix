<?php

namespace App\Livewire\Producto;

use App\Livewire\Forms\ProductForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use function Livewire\Volt\layout;


class CreateProduct extends Component
{
    public ProductForm $form;

    public function save(){
        $this->form->store();

        return $this->redirect("/productos/index");

    }


    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.producto.create-product');
    }
}
