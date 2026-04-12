<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = Auth::user()->cart;

        if (! $cart || $cart->items->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }

        $cart->load('items.product');

        return view('user.checkout', compact('cart'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'payment_method' => 'required|in:cod,stripe,paypal',
        ]);

        $cart = Auth::user()->cart;

        if (! $cart || $cart->items->isEmpty()) {
            return back()->with('error', 'Your cart is empty.');
        }

        $cart->load('items.product');

        foreach ($cart->items as $item) {
            if ($item->product->stock < $item->quantity) {
                return back()->with('error', "Not enough stock for {$item->product->name}.");
            }
        }

        $order = DB::transaction(function () use ($cart, $request) {
            $order = Order::create([
                'user_id' => Auth::id(),
                'total' => $cart->total,
                'status' => 'pending',
                'shipping_address' => json_encode([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip_code' => $request->zip_code,
                ]),
                'payment_method' => $request->payment_method,
            ]);

            foreach ($cart->items as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                ]);

                $item->product->decrement('stock', $item->quantity);
            }

            $cart->items()->delete();

            return $order;
        });

        return redirect()->route('order.confirmation', $order->id)
            ->with('success', 'Order placed successfully!');
    }

    public function confirmation($orderId)
    {
        $order = Order::with('items.product')->findOrFail($orderId);

        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        return view('user.order-confirmation', compact('order'));
    }
}
