<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-[150vh]" x-data="{ openActions: false, openFilter: false }">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

            <!-- Header: buscador, crear, acciones y filtro -->
            <div class="flex flex-col md:flex-row items-center justify-between p-4 gap-4">

                <!-- Buscador -->
                <div class="w-full md:w-1/2">
                    <livewire:producto.search-product />
                </div>

                <!-- Botones -->
                <div class="flex items-center space-x-3">
                    <livewire:producto.create-product />

                    <!-- Botón Acciones -->
                    <div class="relative" @click.away="openActions = false">
                        <button @click="openActions = !openActions"
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 
                                   focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 
                                   dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            Acciones
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Menú Acciones -->
                        <div x-show="openActions" x-transition
                            class="absolute right-0 mt-2 w-44 bg-white dark:bg-gray-700 rounded-lg shadow 
                                   divide-y divide-gray-100 dark:divide-gray-600 z-50">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Masivo</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Exportar</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Botón Filtro -->
                    <div class="relative" @click.away="openFilter = false">
                        <button @click="openFilter = !openFilter"
                            class="flex items-center justify-center text-gray-500 bg-white border border-gray-300 
                                   rounded-lg text-sm px-4 py-2 hover:bg-gray-100 
                                   dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 
                                   dark:hover:bg-gray-700 dark:hover:text-white">
                            Filtrar
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Menú Filtro -->
                        <div x-show="openFilter" x-transition
                            class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-700 rounded-lg shadow 
                                   divide-y divide-gray-100 dark:divide-gray-600 z-50">
                            <div class="p-3">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Categoría
                                </label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm 
                                               dark:bg-gray-800 dark:border-gray-600">
                                    <option>Sala</option>
                                    <option>Oficina</option>
                                    <option>Almacenamiento</option>
                                    <option>Exterior</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabla de productos -->
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-4 py-3">Nombre del producto</th>
                            <th class="px-4 py-3">Categoria</th>
                            <th class="px-4 py-3">Precio</th>
                            <th class="px-4 py-3">Descripcion</th>
                            <th class="px-4 py-3">Cantidad</th>
                            <th class="px-4 py-3">Foto</th>
                            <th class="px-4 py-3">
                                <span class="sr-only">Acciones</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <livewire:producto.list-product />
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
