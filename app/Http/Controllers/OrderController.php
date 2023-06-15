<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function list()
    {
        $orders = Order::latest()->paginate();
        return view('orders.index', ['orders' => $orders]);
    }

    public function create(Order $order)
    {
        return view('orders.create', ['order' => $order]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description'  => 'required',
            'flavor'  => 'required',
            'price'  => 'required'
        ]);

        $order = Order::create([
            'name' => $request->name,
            'description'  => $request->description,
            'flavor'  => $request->flavor,
            'price'  => $request->price,
        ]);

        return redirect()->route('orders.edit', $order->id);
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return back();
    }

}
