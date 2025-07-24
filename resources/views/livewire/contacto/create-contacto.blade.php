<section class="w-full max-w-lg mx-auto p-8 bg-white rounded-xl shadow-xl border border-gray-600 dark:bg-gray-800 my-10">
    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6 text-center">
        Contáctanos
    </h2>
    <p class="text-center text-gray-600 dark:text-gray-400 mb-8 text-sm">
        ¿Tienes dudas, sugerencias o necesitas soporte? Estamos aquí para ayudarte.
    </p>

    <form wire:submit="save" class="space-y-6">

        <div>
            <label for="name" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">
                Tu nombre
            </label>
            <input type="text" id="name" name="name" 
                   class="w-full rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900
                       placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-300
                       dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500" wire:model="form.nombre"/>
            <span class="block mt-1 text-sm text-red-600 text-center animate-fadeUp" >
            @error('form.nombre') {{ $message }} @enderror
          </span>
        </div>

        <div>
            <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">
                Tu correo
            </label>
            <input type="email" id="email" name="email" 
                   class="w-full rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900
                       placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-300
                       dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500" wire:model="form.email"/>
            <span class="block mt-1 text-sm text-red-600 text-center animate-fadeUp" >
            @error('form.email') {{ $message }} @enderror
          </span>
        </div>

        <div>
            <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">
                Tu mensaje
            </label>
            <textarea id="message" name="message" rows="5" 
                      class="w-full rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900
                       placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-300
                       dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500"
                      placeholder="Escribe tu mensaje aquí..." wire:model="form.body"></textarea>
            <span class="block mt-1 text-sm text-red-600 text-center animate-fadeUp">
            @error('form.body') {{ $message }} @enderror
          </span>
        </div>

        <button type="submit"
                class="w-full rounded-full bg-green-600 px-6 py-3 text-white font-semibold shadow-lg
                   hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300
                   dark:focus:ring-green-600 transition">
            ✉️ Envía tu mensaje
        </button>
    </form>
</section>
