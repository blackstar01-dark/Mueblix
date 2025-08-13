<?php

namespace App\Livewire\Producto;

use App\Livewire\Forms\ProductForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateProduct extends Component
{
    use WithFileUploads;

    public bool $showModal = false;

    public ProductForm $form;

    public function openModal(){
        $this->showModal = true;
    }

    public function closeModal(){
        $this->showModal = false;
    }

    public function save(){
        $this->form->store();

        $this->closeModal();

        return redirect("/producto/index-producto");

    }


    public function render()
    {
        return view('livewire.producto.create-product');
    }
}
