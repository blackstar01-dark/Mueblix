<?php

namespace Tests\Feature\Livewire\Administradores;

use App\Livewire\Administradores\LoginAdmin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LoginAdminTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(LoginAdmin::class)
            ->assertStatus(200);
    }

    public function test_omponent_exists_on_the_page(){
        $this->get('/administradores/login-admin')
            ->assertSeeLivewire(LoginAdmin::class);
    }

    public function test_admin_can_login_with_valid_credentials()
    {
        Livewire::test(LoginAdmin::class)
            ->set('correo', 'ecruz0309@outlook.com')
            ->set('password', '3317017364Ab')
            ->call('login')
            ->assertRedirect('/');

        $this->assertAuthenticated('administradores');
    }
}
