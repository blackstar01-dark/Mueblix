<?php

namespace App\Livewire\Forms;

use App\Models\producto;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{

    #[Validate('required|min:5')]
    public $nombre;

    #[Validate('required|min:5' )]
    public $descripcion;

    #[Validate('required')]
    public $precio;

    public function store(){
        $this->validate();

        producto::create($this->all());

        return $this->redirect('/');
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio',
            'nombre.min' => 'El campo nombre debe tener al menos 5 caracteres',

            'descripcion.required' => 'El campo descripcion es obligatorio',
            'descripcion.min' => 'El campo descripcion debe tener al menos 5 caracteres',

            'precio.required' => 'El campo precio es obligatorio',
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'nombre' => 'nombre del producto',
            'descripcion' => 'descripcion del producto',
            'precio' => 'precio del producto',
        ];
    }

}
