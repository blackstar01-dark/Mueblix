<?php
use function Livewire\Volt\{state, rules, layout};
use App\Models\cliente; 
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

layout('components.layouts.app');

state([
    'nombres' => '',
    'apellidos' => '',
    'curp' => '',
    'sexo' => '',
    'calle' => '',
    'numero' => '',
    'codigo_postal' => '',
    'colonia' => '',
    'ciudad' => '',
    'estado' => '',
    'dia_nac' => '',
    'mes_nac' => '',
    'ano_nac' => '',
    'correo' => '',
    'telefono' => '',
    'password' => '',
    'password_confirmation' => '',
]);

rules([
    'nombres' => ['required', 'string', 'max:255', 'min:3'],
    'apellidos' => ['required', 'string', 'min:3', 'max:255'],
    'curp' => ['required', 'size:18'],
    'sexo' => ['required', 'in:Hombre,Mujer'],
    'calle' => ['required', 'string', 'min:5'],
    'numero' => ['required', 'integer', 'min:1'],
    'colonia' => ['required', 'string', 'min:5'],
    'ciudad' => ['required', 'string', 'min:3'],
    'estado' => ['required', 'string', 'min:3'],
    'dia_nac' => ['required', 'integer', 'min:1', 'max:31'],
    'mes_nac' => ['required', 'integer', 'min:1', 'max:12'],
    'ano_nac' => ['required', 'integer', 'min:1999', 'max:2005'],
    'correo' => ['required', 'email', 'max:255'],
    'telefono' => ['required', 'digits:10'],
    'password' => ['required', 'string', 'confirmed', Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($cliente = cliente::create([
        'nombres' => $validated['nombres'],
        'apellidos' => $validated['apellidos'],
        'curp' => $validated['curp'],
        'sexo' => $validated['sexo'],
        'calle' => $validated['calle'],
        'numero' => $validated['numero'],
        'codigo_postal' => $validated['codigo_postal'] ?? null,
        'colonia' => $validated['colonia'],
        'ciudad' => $validated['ciudad'],
        'estado' => $validated['estado'],
        'dia_nac' => $validated['dia_nac'],
        'mes_nac' => $validated['mes_nac'],
        'ano_nac' => $validated['ano_nac'],
        'correo' => $validated['correo'],
        'telefono' => $validated['telefono'],
        'password' => $validated['password'],
    ])));

    Auth::login($cliente);

    $this->redirect(RouteServiceProvider::HOME, navigate: true);
};

$resetForm = function () {
    $this->reset([
        'nombres', 'apellidos', 'curp', 'sexo', 'calle', 'numero', 'codigo_postal',
        'colonia', 'ciudad', 'estado', 'dia_nac', 'mes_nac', 'ano_nac', 'correo',
        'telefono', 'password', 'password_confirmation'
    ]);
};

?>

<div class="min-h-[80vh] pt-8 flex justify-center items-start bg-gray-100 dark:bg-gray-800">
    <div class="w-full max-w-4xl p-7 bg-white border border-gray-200 rounded-2xl shadow-sm drop-shadow-[0_0_15px_rgba(255,255,255,0.2)] dark:bg-gray-800 dark:border-gray-900">
        <form wire:submit="register" class="w-full">
            <!-- Nombres -->
            <div class="relative z-0 w-full mb-5 group">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Nombres</label>
                <input type="text" placeholder="Nombres" wire:model="nombres"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
            </div>
            <!-- Apellidos -->
            <div class="relative z-0 w-full mb-5 group">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Apellidos</label>
                <input type="text" placeholder="Apellidos" wire:model="apellidos"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
            </div>
            <!-- CURP -->
            <div class="relative z-0 w-full mb-5 group">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">CURP</label>
                <input type="text" placeholder="CURP" wire:model="curp"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
            </div>
            <!-- Sexo -->
            <div class="relative z-0 w-full mb-5 group">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Sexo</label>
                <select wire:model="sexo"
                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                    <option selected disabled>Seleccione su sexo</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>
            <!-- Dirección: Calle, Número, Código Postal -->
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Calle</label>
                    <input type="text" placeholder="Calle" wire:model="calle"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Número de calle</label>
                    <input type="number" placeholder="Número de calle" wire:model="numero"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Código postal</label>
                    <input type="text" placeholder="Código postal" wire:model="codigo_postal"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
            </div>
            <!-- Estado, Ciudad, Colonia -->
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Estado</label>
                    <input type="text" placeholder="Estado" wire:model="estado"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Ciudad</label>
                    <input type="text" placeholder="Ciudad" wire:model="ciudad"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Colonia</label>
                    <input type="text" placeholder="Colonia" wire:model="colonia"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
            </div>
            <!-- Fecha de nacimiento -->
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Día de nacimiento</label>
                    <input type="number" placeholder="Día" wire:model="dia_nac"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center" min="1" max="31">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Mes de nacimiento</label>
                    <input type="number" placeholder="Mes" wire:model="mes_nac"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center" min="1" max="12">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Año de nacimiento</label>
                    <input type="number" placeholder="Año" wire:model="ano_nac"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center" min="1999" max="2005">
                </div>
            </div>
            <!-- Correo, Contraseña, Confirmar Contraseña, Teléfono -->
            <div class="grid md:grid-cols-4 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Correo</label>
                    <input type="email" placeholder="Correo" wire:model="correo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Contraseña</label>
                    <input type="password" placeholder="Contraseña" wire:model="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Confirmar Contraseña</label>
                    <input type="password" placeholder="Confirmar Contraseña" wire:model="password_confirmation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Teléfono</label>
                    <input type="tel" placeholder="Teléfono" wire:model="telefono"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center" maxlength="10">
                </div>
            </div>
            <!-- Botones -->
            <div class="flex justify-center gap-4">
                <button type="submit"
                    class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2 text-center shadow-md drop-shadow-[0_0_10px_rgba(255,255,255,0.3)] transition">
                    Registrar
                </button>
                <button type="button" wire:click="resetForm"
                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-2 text-center shadow-md drop-shadow-[0_0_10px_rgba(255,255,255,0.3)] transition">
                    Borrar
                </button>
            </div>
        </form>
    </div>
</div>
