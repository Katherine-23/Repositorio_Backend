<?php

namespace App\Http\Controllers;

use App\Models\OrderPurchase;
use Illuminate\Http\Request;

class OrderPurchaseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'idprov' => 'required|integer',
            'method' => 'required|string|max:50',
            'total_products' => 'required|string',
            'total_price' => 'required|numeric',
            'placed_on' => 'required|string|max:15',
            'payment_status' => 'required|string|max:20',
            'tipc' => 'required|string|max:15',
        ]);

        $orderPurchase = OrderPurchase::create($request->all());

        return response()->json($orderPurchase, 201);
    }
}
