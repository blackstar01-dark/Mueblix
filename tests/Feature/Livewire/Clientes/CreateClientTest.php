<?php

namespace Tests\Feature\Livewire\Clientes;

use App\Livewire\Clientes\CreateClient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use App\Models\cliente;
use Tests\TestCase;

class CreateClientTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(CreateClient::class)
            ->assertStatus(200);
    }

    public function test_component_exists_on_the_page()
    {
        $this->get('/clientes/create-client')
            ->assertSeeLivewire(CreateClient::class);
    }

    public function test_can_create_client(){

        $this->assertEquals(0, cliente::count());

        Livewire::test(CreateClient::class)
            ->set('cliente.nombres', 'EDGAR ABRAHAM')
            ->set('cliente.apellidos', 'CRUZ OCHOA')
            ->set('cliente.curp', 'CUOE050903HJCRCDA8')
            ->set('cliente.sexo', 'Hombre')
            ->set('cliente.calle', 'Loma Tinguindin Pte')
            ->set('cliente.numero', '326')
            ->set('cliente.codigo_postal', '45402')
            ->set('cliente.colonia', 'Loma dorada')
            ->set('cliente.ciudad', 'Tonala')
            ->set('cliente.estado', 'Jalisco')
            ->set('cliente.dia_nac', '3')
            ->set('cliente.mes_nac', '9')
            ->set('cliente.ano_nac', '2005')
            ->set('cliente.correo', 'ecruz0309@outlook.com')
            ->set('clientes.telefono', '3317017364')
            ->set('cliente.password', '3317017364Ab')
            ->call('save');
        
            $this->assertEquals(1, cliente::count());
    }

}
