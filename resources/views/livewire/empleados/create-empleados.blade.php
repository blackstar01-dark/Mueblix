<div>
    <!-- Botón para abrir modal -->
    <button
        wire:click="openModal"
        class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">
        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
      <path clip-rule="evenodd" fill-rule="evenodd" 
        d="M10 3a1 1 0 011 1v5h5a1 1 0 
           110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 
           110-2h5V4a1 1 0 011-1z" />
    </svg>
    Nuevo empleado
    </button>

    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
             wire:keydown.escape="$set('showModal', false)">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6 dark:bg-gray-800">
                
                <!-- Header -->
                <div class="flex justify-between items-center border-b pb-3 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Registrar Empleado</h3>
                    <button wire:click="closeModal" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        ✕
                    </button>
                </div>

                <!-- Formulario -->
                <form wire:submit.prevent="save">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <!-- Nombre -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                            <input type="text" wire:model.defer="form.nombre"
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                            @error('form.nombre') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <!-- Apellido -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apellido</label>
                            <input type="text" wire:model.defer="form.apellido"
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                            @error('form.apellido') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <!-- Correo -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Correo</label>
                            <input type="email" wire:model.defer="form.correo"
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                            @error('form.correo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <!-- Teléfono -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teléfono</label>
                            <input type="text" wire:model.defer="form.telefono"
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                            @error('form.telefono') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <!-- Puesto -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Puesto</label>
                            <input type="text" wire:model.defer="form.puesto"
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                            @error('form.puesto') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <!-- Salario -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Salario</label>
                            <input type="number" wire:model.defer="form.salario" step="0.01"
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                            @error('form.salario') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end gap-3 mt-4">
                        <button type="button" wire:click="closeModal"
                            class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-lg text-gray-900">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                            Guardar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    @endif
</div>
