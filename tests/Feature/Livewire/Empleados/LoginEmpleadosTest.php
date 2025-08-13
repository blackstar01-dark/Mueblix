<?php

namespace Tests\Feature\Livewire\Empleados;

use App\Livewire\Empleados\LoginEmpleados;
use App\Models\Empleado;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginEmpleadosTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully()
    {
        Livewire::test(LoginEmpleados::class)
            ->assertStatus(200);
    }

    public function test_component_exists_on_the_page(){
        $this->get('/empleados/login-empleados')
            ->assertSeeLivewire(LoginEmpleados::class);
    }

    public function test_empleado_can_login_with_valid_credentials(){
        $empleado = Empleado::factory()->create([
            'nombres' => 'Edgar',
            'apellidos' => 'Cruz',
            'curp' => 'CRUE800101HDFRZR11',
            'rfc' => 'CUOE1q2werfgt',
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
            'correo' => 'edgarcruz11@outlook.com',
            'telefono' => '5512345678',
            'password' => Hash::make('password123'),
        ]);

        Livewire::test(LoginEmpleados::class)
            ->set('correo', 'edgarcruz11@outlook.com')
            ->set('password', 'password123')
            ->call('login')
            ->assertRedirect('/');

        $this->actingAs($empleado, 'empleados');

        $this->assertAuthenticatedAs($empleado, 'empleados');
    }
}
