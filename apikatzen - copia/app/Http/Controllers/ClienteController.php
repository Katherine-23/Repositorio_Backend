<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'idusu' => 'required|integer',
            'tipd' => 'required|string|max:25',
            'nudoc' => 'required|string|max:8|unique:clientes',
            'nocl' => 'required|string|max:35',
            'telfcl' => 'required|string|max:9',
            'state' => 'required|string|max:1',
        ]);

        $cliente = Cliente::create($request->all());

        return response()->json($cliente, 201);
    }
}
