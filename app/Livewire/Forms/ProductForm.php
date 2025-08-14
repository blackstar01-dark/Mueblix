<?php

namespace App\Livewire\Forms;

use App\Models\Producto;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class ProductForm extends Form
{
    public ?Producto $producto;

    use WithFileUploads;

    #[Validate('required|min:5')]
    public $nombre;

    #[Validate('required|min:5')]
    public $descripcion;

    #[Validate('required')]
    public $precio;

    #[Validate('required')]
    public $categoria;

    #[Validate('required')]
    public $cantidad;

    #[Validate('nullable|image|max:2048')]
    public $imagen;

    public function setProducto(Producto $producto) {
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->precio = $producto->precio;
        $this->cantidad = $producto->cantidad;
        $this->categoria  = $producto->categoria;
        $this->imagen = $producto->imagen;

        $this->producto = $producto;
    }

    public function store()
    {
        $this->validate();

        // Guardar imagen si existe
        $ruta = $this->imagen
            ? $this->imagen->store('productos', 'public')
            : null;

        // Crear producto
        Producto::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'categoria' => $this->categoria,
            'cantidad' => $this->cantidad,
            'imagen' => $ruta, // <-- solo la ruta, no el archivo
        ]);
    }

    public function update(){
        $this->validate();
        $ruta = $this->imagen
            ? $this->imagen->store('productos', 'public')
            : null;

        Producto::updated([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'categoria' => $this->categoria,
            'cantidad' => $this->cantidad,
            'imagen' => $ruta,
        ]);
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio',
            'nombre.min' => 'El campo nombre debe tener al menos 5 caracteres',
            'descripcion.required' => 'El campo descripcion es obligatorio',
            'descripcion.min' => 'El campo descripcion debe tener al menos 5 caracteres',
            'precio.required' => 'El campo precio es obligatorio',
            'categoria.required' => 'El campo categoria es obligatorio',
            'imagen.image' => 'El archivo debe ser una imagen',
            'imagen.max' => 'La imagen no debe ser mayor a 2MB',
            'cantidad.required' => 'El campo cantidad es obligatorio',
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'nombre' => 'nombre del producto',
            'descripcion' => 'descripcion del producto',
            'precio' => 'precio del producto',
            'categoria' => 'categoria del producto',
            'imagen' => 'imagen del producto',
        ];
    }
}
