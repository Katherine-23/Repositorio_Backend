<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return response()->json($marcas);
    }

    public function show($id)
    {
        $marca = Marca::findOrFail($id);
        return response()->json($marca);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomarc' => 'required|string',
            'state' => 'required|string',
            // 'fere' => 'required|timestamp', // Optional: Uncomment this line if 'fere' is required
        ]);

        $marca = Marca::create($request->all());

        return response()->json($marca, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomarc' => 'required|string',
            'state' => 'required|string',
            // 'fere' => 'required|timestamp', // Optional: Uncomment this line if 'fere' is required
        ]);

        $marca = Marca::findOrFail($id);
        $marca->update($request->all());

        return response()->json($marca);
    }

    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return response()->json(null, 204);
    }
}
