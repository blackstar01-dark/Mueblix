<div>
  <div class="min-h-[80vh] pt-8 flex flex-col items-center bg-gray-100 dark:bg-gray-800">
    <!-- Título -->
    <h1 class="mb-6 px-6 py-3 bg-green-500 text-gray-100 rounded-full text-center text-xl font-semibold shadow-sm">
      Registro de Productos
    </h1>

    <div class="w-full max-w-4xl p-7 bg-white border border-gray-200 rounded-2xl shadow-sm drop-shadow-[0_0_15px_rgba(255,255,255,0.2)] dark:bg-gray-800 dark:border-gray-900">
      <form wire:submit="save" class="w-full">
        <div class="relative z-0 w-full mb-5 group">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Nombre del producto</label>
          <input type="text" placeholder="Nombre" wire:model="form.nombre"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
          <span class="block mt-1 text-sm text-red-600 text-center animate-fadeUp">
            @error('form.nombre') {{ $message }} @enderror
          </span>
        </div>

        <div class="relative z-0 w-full mb-5 group">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Descripción del producto</label>
          <input type="text" placeholder="Descripción" wire:model="form.descripcion"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
          <span class="block mt-1 text-sm text-red-600 text-center animate-fadeUp">
            @error('form.descripcion') {{ $message }} @enderror
          </span>
        </div>

        <div class="relative z-0 w-full mb-5 group">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Precio del producto</label>
          <input type="text" placeholder="Precio" wire:model="form.precio"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 text-center">
          <span class="block mt-1 text-sm text-red-600 text-center animate-fadeUp">
            @error('form.precio') {{ $message }} @enderror
          </span>
        </div>

        <div class="flex justify-center">
          <button type="submit"
            class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2 text-center shadow-md drop-shadow-[0_0_10px_rgba(255,255,255,0.3)] transition">
            Registrar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
