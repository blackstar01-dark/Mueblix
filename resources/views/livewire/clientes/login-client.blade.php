<div class="flex flex-col lg:flex-row min-h-screen bg-gray-900 text-white overflow-hidden border rounded-lg border-gray-900 shadow-2xl">
    <!-- Sección izquierda: Formulario -->
    <div class="flex flex-col justify-center items-center w-full lg:w-1/2 px-6 py-8">
        <div class="w-full max-w-5xl space-y-8">
            <h2 class="text-3xl font-extrabold text-center">Inicia sesión y transforma tu hogar con Mueblix</h2>

            <div class="flex gap-4">
                <button class="flex-1 flex items-center justify-center gap-2 bg-white text-gray-800 py-2 px-4 rounded-md shadow">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" class="w-5 h-5" />
                    Ingresa con Google  
                </button>
                <button class="flex-1 flex items-center justify-center gap-2 bg-white text-gray-800 py-2 px-4 rounded-md shadow">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.664 13.341c-.065-1.297.573-2.276 1.799-2.994..." />
                    </svg>
                    Ingresa con  Apple
                </button>
            </div>

            <div class="flex items-center gap-2">
                <div class="flex-grow h-px bg-gray-600"></div>
                <span class="text-sm text-gray-400">O</span>
                <div class="flex-grow h-px bg-gray-600"></div>
            </div>

            <form wire:submit.prevent="login" class="space-y-4">
                <div>
                    <label class="block text-sm mb-1">Ingresa tu correo</label>
                    <input type="email" wire:model="login.correo" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" />
                    @error('login.correo') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm mb-1">Ingresa tu contrasena</label>
                    <input type="password" wire:model="login.password" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" />
                    @error('login.password') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 rounded-md">
                    Ingresar
                </button>
            </form>

            <p class="text-sm text-gray-400">
                ¿Todavía no tienes cuenta?
                <a href="/clientes/create-client" class="text-green-400 hover:underline" wire:navigate.hover>Regístrate aquí</a>
            </p>
        </div>
    </div>

    <!-- Sección derecha (marketing) -->
    <div class="hidden lg:flex flex-col justify-center items-center w-1/2 bg-green-600 p-12">
        <div class="max-w-md text-center">
            <h2 class="text-3xl font-bold mb-4">Descubre muebles que transforman tu hogar</h2>
            <p class="mb-6">En <strong>Mueblix</strong>, combinamos diseño, confort y tecnología para ofrecerte los mejores muebles desde la comodidad de tu hogar.</p>
            <div class="flex items-center justify-center gap-2">
                <div class="flex -space-x-2">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-8 h-8 rounded-full border-2 border-white" />
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" class="w-8 h-8 rounded-full border-2 border-white" />
                    <img src="https://randomuser.me/api/portraits/women/10.jpg" class="w-8 h-8 rounded-full border-2 border-white" />
                </div>
                <span class="ml-2 text-sm">Más de <strong>10,000</strong> clientes felices en todo México</span>
            </div>
        </div>
    </div>
</div>
