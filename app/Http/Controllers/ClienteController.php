<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClienteController extends Controller
{

    public function show(Request $request, string $idCliente): View
    {
        $value = $request->session()->get('key');

        $cliente = Cliente::find($idCliente);

        return view('clientes.index', ['cliente' => $cliente]);
    }
}
