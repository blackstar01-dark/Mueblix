<div>
    @foreach ($productos as $producto)
        <tr class="border-b dark:border-gray-700">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $producto->nombre }}
            </th>
            <td class="px-4 py-3">{{ $producto->categoria }}</td>
            <td class="px-4 py-3">${{ number_format($producto->precio, 2) }}</td>
            <td class="px-4 py-3">{{ $producto->descripcion }}</td>
            <td class="px-4 py-3">
                @if ($producto->imagen)
                    <img src="{{ asset('storage/' . $producto->imagen) }}" class="h-16 w-16 object-cover rounded" />
                @else
                    <span class="text-sm italic text-gray-400">Sin imagen</span>
                @endif
            </td>
            <td class="px-4 py-3 flex items-center justify-end">
                <!-- Botones de acción (Show, Edit, Delete) -->
                <div class="relative">
                    <button class="inline-flex items-center p-0.5 text-sm font-medium text-center 
                                text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none 
                                dark:text-gray-400 dark:hover:text-gray-100">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
</div>
