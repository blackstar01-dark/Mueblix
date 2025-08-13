<?php

namespace App\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class ListEmpleados extends Component
{

    public $search = '';

    protected $listeners = ['empleado-agregado' => '$refresh', 'filtroEmpleado' => 'filtroEmpleado'];

    public function actualizarFiltroEmpleado($valor){
        $this->search = $valor;
    }

    public function render()
    {
        $empleados = Empleado::query()
            ->where('nombres', 'like', '%' . $this->search . '%')
            ->orWhere('apellidos', 'like', '%' . $this->search . '%')
            ->latest()
            ->get();

        return view('livewire.empleados.list-empleados', [
            'empleados' => $empleados,
        ]);
    }
}
