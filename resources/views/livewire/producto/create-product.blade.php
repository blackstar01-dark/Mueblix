<div>
  {{-- Botón para abrir modal --}}
  <button
    wire:click="openModal"
    class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">
    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
      <path clip-rule="evenodd" fill-rule="evenodd" 
        d="M10 3a1 1 0 011 1v5h5a1 1 0 
           110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 
           110-2h5V4a1 1 0 011-1z" />
    </svg>
    Nuevo producto
  </button>

  {{-- Modal --}}
  @if ($showModal)
    <div
      class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
      wire:keydown.escape="$set('showModal', false)"
    >
      <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6 dark:bg-gray-800">
        <div class="flex justify-between items-center border-b pb-3 mb-4">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Agregar producto</h3>
          <button
            class="text-gray-400 hover:text-gray-900 dark:hover:text-white"
            wire:click="closeModal"
            aria-label="Cerrar modal"
          >
            ✕
          </button>
        </div>

        <form wire:submit.prevent="save">
          <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
              <input
                type="text"
                wire:model.defer="form.nombre"
                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white"
              />
              @error('form.nombre') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
              <input
                type="number"
                wire:model.defer="form.precio"
                step="0.01"
                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white"
              />
              @error('form.precio') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
              <select
                wire:model.def="form.categoria"
                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white"
              >
                <option value="">Selecciona una categoría</option>
                <option value="Sala">Sala</option>
                <option value="Oficina">Oficina</option>
                <option value="Almacenamiento">Almacenamiento</option>
                <option value="Exterior">Exterior</option>
              </select>
              @error('form.categoria') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="sm:col-span-2">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
              <textarea
                wire:model.defer="form.descripcion"
                rows="4"
                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                placeholder="Escribe la descripción del producto"
              ></textarea>
              @error('form.descripcion') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Imagen --}}
            <div class="sm:col-span-2">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen</label>
              <input
                type="file"
                wire:model="form.imagen"
                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white"
              />
              @error('form.imagen') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

              @if ($form->imagen)
                <div class="mt-2">
                  <img src="{{ $form->imagen->temporaryUrl() }}" class="h-32 rounded object-cover" />
                </div>
              @endif
            </div>
          </div>

          <div class="flex justify-end space-x-2">
            <button
              type="button"
              wire:click="closeModal"
              class="px-4 py-2 rounded bg-gray-500 hover:bg-gray-600 text-white"
            >
              Cancelar
            </button>
            <button
              type="submit"
              class="px-4 py-2 rounded bg-green-700 hover:bg-green-800 text-white"
            >
              Agregar producto
            </button>
          </div>
        </form>
      </div>
    </div>
  @endif
</div>
