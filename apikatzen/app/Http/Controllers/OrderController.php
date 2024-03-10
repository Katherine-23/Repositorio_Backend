<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'clien_numdoc' => 'required|string|max:8',
            'nomcl' => 'required|string',
            'method' => 'required|string|max:50',
            'total_products' => 'required|string',
            'total_price' => 'required|numeric',
            'placed_on' => 'required|string|max:15',
            'payment_status' => 'required|string|max:20',
            'tipc' => 'required|string|max:15',
        ]);

        $order = Order::create($request->all());

        return response()->json($order, 201);
    }
}
