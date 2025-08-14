<div>
    @foreach ($productos as $producto)
        <tr class="border-b dark:border-gray-700">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $producto->nombre }}
            </th>
            <td class="px-4 py-3">{{ $producto->categoria }}</td>
            <td class="px-4 py-3">${{ number_format($producto->precio, 2) }}</td>
            <td class="px-4 py-3">{{ $producto->descripcion }}</td>
            <td class="px-4 py-3">{{ $producto->cantidad }}</td>
            <td class="px-4 py-3">
                @if ($producto->imagen)
                    <img src="{{ asset('storage/' . $producto->imagen) }}" class="h-16 w-16 object-cover rounded" />
                @else
                    <span class="text-sm italic text-gray-400">Sin imagen</span>
                @endif
            </td>
            <td class="px-4 py-3 flex items-center justify-end" x-data="{ open: false }">
                <!-- Botón de menú -->
                <button @click="open = !open" class="inline-flex items-center p-0.5 text-sm font-medium text-center 
                                text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none 
                                dark:text-gray-400 dark:hover:text-gray-100">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </button>

                <!-- Menú desplegable -->
                <div x-show="open" @click.away="open = false" 
                     class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 rounded-lg shadow-lg py-2 z-50"
                     x-transition>
                    <a href="" 
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                        Ver
                    </a>
                    <livewire:producto.delete-product :productoId="$producto->id" :wire:key="$producto->id" />
                </div>
            </td>
        </tr>
    @endforeach
</div>

