<div class="p-6 bg-white dark:bg-gray-900 rounded-lg shadow-md">
    <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white">Carrito de Compras</h2>

    @if(count($cart) > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-100 dark:bg-gray-800 rounded-lg">
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 uppercase text-sm">
                        <th class="py-3 px-6 text-left">Producto</th>
                        <th class="py-3 px-6 text-center">Cantidad</th>
                        <th class="py-3 px-6 text-center">Precio</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $item)
                    <tr class="border-b border-gray-300 dark:border-gray-600">
                        <td class="py-4 px-6">{{ $item['nombre'] }}</td>
                        <td class="py-4 px-6 text-center">{{ $item['cantidad'] }}</td>
                        <td class="py-4 px-6 text-center font-semibold">${{ number_format($item['precio'] * $item['cantidad'],2) }}</td>
                        <td class="py-4 px-6 text-center">
                            <button 
                                wire:click="eliminarProducto({{ $id }})"
                                class="bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-1 rounded">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex flex-col md:flex-row md:justify-between md:items-center">
            <p class="text-xl font-bold text-gray-900 dark:text-white mb-4 md:mb-0">
                Total: ${{ number_format($total,2) }}
            </p>

            <button 
                wire:click="pagoConMercadoPago" 
                class="bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-3 rounded transition duration-200">
                Pagar con Mercado Pago
            </button>
        </div>
    @else
        <p class="text-gray-700 dark:text-gray-300">Tu carrito está vacío</p>
    @endif
</div>
