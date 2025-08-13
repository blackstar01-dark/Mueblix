<?php

namespace App\Livewire;

use Livewire\Component;
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;
use MercadoPago\Payer;

class Carrito extends Component
{
    public $cart = [];
    public $total = 0;

    public function mount() {
        // Cargar carrito desde la sesión
        $this->cart = session('cart', []);
        $this->calcularTotal();
    }

    public function agregarProducto($productoId, $nombre, $precio) {
        if(isset($this->cart[$productoId])) {
            $this->cart[$productoId]['cantidad']++;
        } else {
            $this->cart[$productoId] = [
                'nombre' => $nombre,
                'precio' => $precio,
                'cantidad' => 1,
            ];
        }

        session(['cart' => $this->cart]);
        $this->calcularTotal();
    }

    public function eliminarProducto($productoId) {
        if(isset($this->cart[$productoId])) {
            unset($this->cart[$productoId]);
            session(['cart' => $this->cart]);
            $this->calcularTotal();
        }
    }

    public function calcularTotal() {
        $this->total = 0;
        foreach ($this->cart as $item) {
            $this->total += $item['precio'] * $item['cantidad'];
        }
    }

    public function pagoConMercadoPago() {
        // Configurar token sandbox de prueba
        SDK::setAccessToken(env('MERCADOPAGO_ACCESS_TOKEN'));

        $preference = new Preference();

        // Crear items para la preferencia
        $items = [];
        foreach ($this->cart as $productoId => $producto) {
            if ($producto['precio'] <= 0 || $producto['cantidad'] <= 0) continue;

            $mercadoItem = new Item();
            $mercadoItem->title = $producto['nombre'];
            $mercadoItem->quantity = (int) $producto['cantidad'];
            $mercadoItem->unit_price = (float) $producto['precio'];

            $items[] = $mercadoItem;
        }

        $preference->items = $items;

        // Payer sandbox (usuario de prueba)
        $payer = new Payer();
        $payer->email = "test_user_123456@testuser.com";
        $preference->payer = $payer;

        // URLs de retorno
        $preference->back_urls = [
            "success" => route('comprar-exito'),
            "failure" => route('comprar-falla'),
            "pending" => route('comprar-pendiente')
        ];
        $preference->auto_return = "approved";

        // Guardar preferencia
        $preference->save();

        // Redirigir al sandbox_init_point
        return redirect()->away($preference->sandbox_init_point);
    }

    public function render() {
        return view('livewire.carrito');
    }
}
