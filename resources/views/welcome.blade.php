<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Mueblix</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-100">
    <header>
        @livewire('layout.navigation')
    </header>

    <main class="mt-24 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Sección de bienvenida + formulario -->

        
        @if(session()->has('success_clientes'))
            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡Éxito! </strong>
                <span class="block sm:inline">{{ session('success_clientes') }}</span>
            </div>
        @endif

        @if(session()->has('success_administradores'))
            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡Éxito! </strong>
                <span class="block sm:inline">{{ session('success_administradores') }}</span>
            </div>
        @endif
        <section class="bg-white dark:bg-gray-900 rounded-xl my-10 shadow-2xl border border-gray-700 dark:border-gray-700 p-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16">
                <!-- Izquierda: texto -->
                <div class="flex flex-col justify-center mb-10 lg:mb-0">
                    <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        Diseña tu hogar, crea tu espacio
                    </h1>
                    <p class="mb-8 text-lg font-medium text-gray-700 lg:text-xl dark:text-gray-300">
                        Descubre muebles únicos que combinan diseño, funcionalidad y calidad para cada rincón de tu hogar.
                    </p>
                    <a href="/producto/create-product" class="inline-flex items-center rounded-full bg-green-600 px-6 py-3 text-white font-semibold shadow-md hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 dark:focus:ring-green-600 transition">
                        Explorar nuestros muebles
                        <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                <!-- Derecha: formulario -->
                <div class="w-full max-w-lg p-8 bg-white rounded-xl shadow-xl dark:bg-gray-800">
                    <h2 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">
                        Regístrate en <span class="text-green-500">M</span>uebli<span class="text-green-500">x</span>
                    </h2>

                    <form  class="space-y-6">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Correo electrónico</label>
                            <input id="email" type="email" name="email" required
                                class="w-full rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500" />
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Contraseña</label>
                            <input id="password" type="password" name="password" required
                                class="w-full rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500" />
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 text-gray-700 dark:text-gray-300">
                                <input id="remember" name="remember" type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700" />
                                <span class="text-sm font-medium">Recuérdame</span>
                            </label>
                            <a href="#" class="text-sm text-green-600 hover:underline dark:text-green-400">¿Olvidaste tu contraseña?</a>
                        </div>

                        <button type="submit"
                            class="w-full rounded-full bg-green-600 px-6 py-3 text-white font-semibold shadow-lg hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 dark:focus:ring-green-600 transition">
                            Ingresa con tu cuenta
                        </button>

                        <p class="text-center text-sm font-medium text-gray-600 dark:text-gray-400">
                            ¿No tienes cuenta?
                            <a href="#" class="text-green-600 hover:underline dark:text-green-500">Crea una cuenta</a>
                        </p>
                    </form>
                </div>
            </div>
        </section>

        <!-- Sección de categorías + galería -->
        <section class="bg-white dark:bg-gray-900 rounded-xl my-10 shadow-2xl border border-gray-700 dark:border-gray-700 p-8">
            <!-- Botones de categorías -->
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button class="rounded-full border border-green-600 bg-blue-50 px-6 py-2 text-green-700 font-semibold hover:bg-green-600 hover:text-white focus:ring-4 focus:ring-green-300 dark:bg-green-900 dark:border-green-500 dark:text-green-400 dark:hover:bg-green-500 dark:hover:text-white transition">
                    All categories
                </button>
                <button class="rounded-full border border-gray-300 bg-white px-6 py-2 text-gray-800 font-semibold hover:bg-gray-800 hover:text-white focus:ring-4 focus:ring-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white transition">
                    Sofás
                </button>
                <button class="rounded-full border border-gray-300 bg-white px-6 py-2 text-gray-800 font-semibold hover:bg-gray-800 hover:text-white focus:ring-4 focus:ring-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white transition">
                    Sillas
                </button>
                <button class="rounded-full border border-gray-300 bg-white px-6 py-2 text-gray-800 font-semibold hover:bg-gray-800 hover:text-white focus:ring-4 focus:ring-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white transition">
                    Mesas
                </button>
                <button class="rounded-full border border-gray-300 bg-white px-6 py-2 text-gray-800 font-semibold hover:bg-gray-800 hover:text-white focus:ring-4 focus:ring-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white transition">
                    Almacenamiento
                </button>
            </div>

            <!-- Galería de imágenes -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=800&q=80" alt="Sofá moderno" class="w-full h-48 object-cover rounded-xl" />
                </div>
                <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1615874959474-d609969a20ed?auto=format&fit=crop&w=800&q=80" alt="Comedor de madera" class="w-full h-48 object-cover rounded-xl" />
                </div>
                <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1616628182506-86dfc8ce6a3d?auto=format&fit=crop&w=800&q=80" alt="Sala elegante" class="w-full h-48 object-cover rounded-xl" />
                </div>
                <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1616627451581-7980d7f6b5cd?auto=format&fit=crop&w=800&q=80" alt="Silla de diseño" class="w-full h-48 object-cover rounded-xl" />
                </div>
                <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1567016549563-6a1f7730bca6?auto=format&fit=crop&w=800&q=80" alt="Mesa rústica" class="w-full h-48 object-cover rounded-xl" />
                </div>
                <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1578898886449-6cfb3bc6b2d3?auto=format&fit=crop&w=800&q=80" alt="Estantería moderna" class="w-full h-48 object-cover rounded-xl" />
                </div>
            </div>
        </section>
    </main>

    @livewire('layout.footer')
    @livewireScripts
</body>
</html>
