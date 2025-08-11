<?php

namespace Tests\Feature\Livewire\Clientes;

use App\Livewire\Clientes\LoginClient;
use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class LoginClientTest extends TestCase
{
    use RefreshDatabase;


    public function test_renders_successfully()
    {
        Livewire::test(LoginClient::class)
            ->assertStatus(200);
    }

    public function component_exists_on_the_page(){
        $this->get('/clientes/login-client')
            ->assertSeeLivewire(LoginClient::class);
    }

    public function test_cliente_can_login_with_valid_credentials(){


        $cliente = Cliente::factory()->create([
            'nombres' => 'Edgar',
            'apellidos' => 'Cruz',
            'curp' => 'CRUE800101HDFRZR00',
            'sexo' => 'Hombre',
            'calle' => 'Calle Falsa',
            'numero' => 123,
            'codigo_postal' => 12345,
            'cuidad' => 'Ciudad Prueba',
            'colonia' => 'Centro',
            'estado' => 'CDMX',
            'dia_nac' => 1,
            'mes_nac' => 1,
            'ano_nac' => 1990,
            'correo' => 'edgarcruz12@outlook.com',
            'telefono' => '5512345678',
            'password' => Hash::make('password123'),
        ]);


        Livewire::test(LoginClient::class)
            ->set('correo', 'edgarcruz12@outlook.com')
            ->set('password', 'password123')
             ->set('remember', true)
            ->call('login')
            ->assertRedirect('/');


        $this->assertAuthenticated('clientes');    
        $this->assertAuthenticatedAs($cliente, 'clientes');

        

    }
}
