<?php

namespace App\Livewire\Producto;

use App\Livewire\Forms\ProductForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateProduct extends Component
{
    use WithFileUploads;

    public ProductForm $form;

    public function save(){
        $this->form->store();

        return redirect("/producto/index-producto");

    }


    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.producto.create-product');
    }
}
