<div>
    <!-- Botón Eliminar -->
    <button wire:click="openModal({{ $productoId }})"
        class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-100 dark:text-red-400 dark:hover:bg-red-700">
        Eliminar
    </button>

    <!-- Modal -->
    @if($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-full max-w-md">
                
                <!-- Cerrar -->
                <button type="button" 
                    wire:click="$set('showModal', false)"
                    class="absolute top-3 right-3 text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    ✕
                </button>

                <!-- Icono -->
                <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 
                        1 0 000 2v10a2 2 0 002 2h8a2 2 0 
                        002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 
                        1 0 0011 2H9zM7 8a1 1 0 012 
                        0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 
                        1v6a1 1 0 102 0V8a1 1 0 
                        00-1-1z" clip-rule="evenodd"></path>
                </svg>

                <p class="text-gray-500 dark:text-gray-300 mb-4">
                    ¿Estás seguro de que quieres borrar este producto?
                </p>

                <!-- Botones -->
                <div class="flex justify-center gap-4">
                    <button wire:click="$set('showModal', false)"
                        class="py-2 px-4 bg-gray-300 dark:bg-gray-600 rounded hover:bg-gray-400 dark:hover:bg-gray-500">
                        No, cancelar
                    </button>

                    <button wire:click="delete"
                        class="py-2 px-4 bg-red-600 text-white rounded hover:bg-red-700">
                        Sí, borrar
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
