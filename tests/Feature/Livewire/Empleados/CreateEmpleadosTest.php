<?php

namespace Tests\Feature\Livewire\Empleados;

use App\Livewire\Empleados\CreateEmpleados;
use App\Models\Empleado;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEmpleadosTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully()
    {
        Livewire::test(CreateEmpleados::class)
            ->assertStatus(200);
    }

    public function test_modal_opens_and_closes_correctly(){
        Livewire::test(CreateEmpleados::class)
            ->assertSet('showModal', false)
            ->call('openModal')
            ->assertSet('showModal', true)
            ->call('closeModal')
            ->assertSet('showModal', false);
    }

    public function test_can_create_empleados(){
        $this->assertEquals(0, Empleado::count());

        Livewire::test(CreateEmpleados::class)
            ->set('form.nombres', 'EDGAR ABRAHAM')
            ->set('form.apellidos', 'CRUZ OCHOA')
            ->set('form.curp', 'CUOE050903HJCRCDA8')
            ->set('form.sexo', 'Masculino')
            ->set('form.calle', 'Loma Tinguindin Pte')
            ->set('form.numero', '326')
            ->set('form.rfc', 'CUOE123456ytre')
            ->set('form.codigo_postal', '45402')
            ->set('form.colonia', 'Loma dorada')
            ->set('form.cuidad', 'Tonala')
            ->set('form.estado', 'Jalisco')
            ->set('form.dia_nac', '3')
            ->set('form.mes_nac', '9')
            ->set('form.ano_nac', '2005')
            ->set('form.correo', 'ecruz0309@outlook.com')
            ->set('form.telefono', '3317017364')
            ->set('form.password', '3317017364Ab')
            ->call('save');
    }
}
