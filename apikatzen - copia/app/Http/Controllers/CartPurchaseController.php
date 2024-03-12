<?php

namespace App\Http\Controllers;

use App\Models\CartPurchase;
use Illuminate\Http\Request;

class CartPurchaseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'idprod' => 'required|integer',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $cartPurchase = CartPurchase::create($request->all());

        return response()->json($cartPurchase, 201);
    }
}
