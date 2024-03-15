<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function index()
    {
        return Producto::all();
    }

    
    public function store(Request $request)
    {
        dd($request->all());
        $producto = new Producto;
        $producto->nombres = $request->nombres;
        $producto->categoria = $request->categoria;
        $producto->save();
        
        return $producto;
    }

    
    public function show(Producto $producto)
    {
        return $producto;
    }

   
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
