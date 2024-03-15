<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function index()
    {
        return Categoria::all();
    }

    
    public function store(Request $request)
{
    // Validar los campos de la solicitud
    $request->validate([
        'nombre' => 'required|string|max:255',
        'tipo' => 'required|string|max:255',
    ]);

    // Mostrar el contenido de la variable $request para depuración
    dd($request->all());

    // Intentar guardar la categoría en la base de datos
    try {
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->tipo = $request->tipo;
        $categoria->save();

        // Retornar la categoría
        return $categoria;
    } catch (\Exception $e) {
        // Capturar cualquier error y registrarlo
        Log::error($e->getMessage());

        // Mostrar un mensaje de error al usuario
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    
    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
