<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <!-- Título -->
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Nuestros Productos</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                Aquí puedes ver todos nuestros productos disponibles con sus precios y características.
            </p>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-between mb-8 space-y-4 md:space-y-0 md:space-x-4">
            <!-- Buscador -->
            <input type="text" 
                placeholder="Buscar productos..." 
                class="w-full md:w-1/2 p-2 rounded-lg border border-gray-700 bg-gray-900 text-white placeholder-gray-400
                        focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500"
                wire:model="search">

            <!-- Categorías -->
            <select class="w-full md:w-1/4 p-2 rounded-lg border border-gray-700 bg-gray-900 text-white placeholder-gray-400
                        focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500"
                    wire:model="categoria">
                <option value="">Todas las categorías</option>
                <option value="Interiores">Interiores</option>
            </select>
        </div>

        <!-- Productos -->
        <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            @foreach($productos as $producto)
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">{{ $producto->nombre }}</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">{{ $producto->descripcion }}</p>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">${{ number_format($producto->precio, 2) }}</span>
                        <span class="text-gray-500 dark:text-gray-400">/unidad</span>
                    </div>

                    <!-- Lista de detalles -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Categoría: <span class="font-semibold">{{ $producto->categoria }}</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Cantidad disponible: <span class="font-semibold">{{ $producto->cantidad }}</span></span>
                        </li>
                    </ul>

                    <img class="w-full h-40 object-cover mb-4 rounded-md" src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">

                    @livewire('agregar-al-carrito', ['producto' => $producto])
                </div>
            @endforeach
        </div>
    </div>
</section>
