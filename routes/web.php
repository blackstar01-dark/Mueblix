<?php

use App\Livewire\Clientes\CreateClient;
use App\Livewire\Clientes\LoginClient;
use App\Livewire\Producto\CreateProduct;
use App\Livewire\Producto\IndexProducto;
use App\Livewire\Contacto\CreateContacto;
use App\Livewire\Ubicacion;
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


Route::get('/producto/create-product', CreateProduct::class)->name('producto');

Route::get('/producto/index-producto', IndexProducto::class)->name('indexproducto');

Route::get('/contacto/create-contacto', CreateContacto::class);

Route::get('/ubicacion', Ubicacion::class);

Route::get('/clientes/login-client', LoginClient::class)->name('');

Route::get('/clientes/create-client', CreateClient::class);



Volt::route('cliente', 'pages.cliente')->name('clientes');



require __DIR__.'/auth.php';
