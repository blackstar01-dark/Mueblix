<section class="min-h-[70vh] bg-gray-800 flex items-center justify-center px-6 py-5">
  <div class="flex flex-col items-center justify-center w-full max-w-md bg-gray-900 rounded-lg shadow-lg p-8">
      <a href="#" class="flex items-center mb-6 text-3xl font-extrabold text-white">
          <img class="w-10 h-10 mr-3" src="https://img.icons8.com/ios-filled/50/34d399/armchair.png" alt="mueblix logo" />
          Mueblix
      </a>
      <h1 class="mb-6 text-2xl font-semibold text-white">
          Crea tu cuenta en Mueblix
      </h1>
      <form class="space-y-5 w-full" wire:submit.prevent="login">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Tu correo electrónico</label>
              <input
                type="email"
                name="email"
                id="email"
                wire:model="correo"
                placeholder="correo@ejemplo.com"
                class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-3"
              />
              @error('correo') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
          </div>
          <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-300">Contraseña</label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="••••••••"
                wire:model="password"
                class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-3"
              />
              @error('password') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
          </div>  
          <button
            type="submit"
            class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 rounded-md focus:ring-4 focus:outline-none focus:ring-green-400"
          >
            Ingresar
          </button>
      </form>
  </div>
</section>
