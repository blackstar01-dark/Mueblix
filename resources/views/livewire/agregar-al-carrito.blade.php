<div>
    <button 
        wire:click="agregarProducto({{ $producto->id }}, '{{ $producto->nombre }}', {{ $producto->precio }})"
        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Agregar al coche
    </button>
</div>
