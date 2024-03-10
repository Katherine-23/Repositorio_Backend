<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::all();
        return response()->json($items);
    }

    public function show($id)
    {
        $item = Cart::findOrFail($id);
        return response()->json($item);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'idprod' => 'required|integer',
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $item = Cart::create($request->all());

        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'idprod' => 'required|integer',
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $item = Cart::findOrFail($id);
        $item->update($request->all());

        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Cart::findOrFail($id);
        $item->delete();

        return response()->json(null, 204);
    }
}
