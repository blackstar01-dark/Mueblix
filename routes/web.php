<?php

use App\Livewire\Clientes\CreateClient;
use App\Livewire\Clientes\LoginClient;
use App\Livewire\Empleados\LoginEmpleados;
use App\Livewire\Producto\CreateProduct;
use App\Livewire\Producto\IndexProducto;
use App\Livewire\Contacto\CreateContacto;
use App\Livewire\Administradores\LoginAdmin;
use App\Livewire\Administradores\Index;
use App\Livewire\Producto\CardsProductos;
use App\Livewire\Carrito;
use App\Livewire\Empleados\CreateEmpleados;
use App\Livewire\Ubicacion;
use App\Livewire\Usuario;
use App\Livewire\Empleados\IndexEmpleados;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/producto/cards-productos', CardsProductos::class);

Route::get('carrito', Carrito::class);

Route::get('/compra/exito', function () {
    return view('compra.exito');
})->name('comprar-exito');

Route::get('/compra/falla', function () {
    return view('compra.falla');
})->name('comprar-falla');

Route::get('/compra/pendiente', function () {
    return view('compra.pendiente');
})->name('comprar-pendiente');

Route::get('/producto/create-product', CreateProduct::class)->name('producto');

Route::get('/producto/index-producto', IndexProducto::class);

Route::get('/contacto/create-contacto', CreateContacto::class);

Route::get('/empleados/login-empleados', LoginEmpleados::class);

Route::get('/ubicacion', Ubicacion::class);

Route::get('/administradores/index', Index::class);

Route::middleware('guest:clientes')->get('/clientes/login-client', LoginClient::class)->name('clientes.login');

Route::middleware('guest:administradores')->get('/administradores/login-admin', LoginAdmin::class);

Route::get('/clientes/create-client', CreateClient::class);

Route::get('/usuario', Usuario::class);

Route::get('/empleados/index-empleados', IndexEmpleados::class);


Volt::route('cliente', 'pages.cliente')->name('clientes');



require __DIR__.'/auth.php';
