<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $cart = Auth::user()->cart;

        if (! $cart) {
            $cart = Cart::create(['user_id' => Auth::id()]);
        }

        $cart->load('items.product');

        return view('user.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        if ($product->stock < $request->quantity) {
            return back()->with('error', 'Not enough stock available.');
        }

        $cart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);

        $cartItem = $cart->items()->where('product_id', $request->product_id)->first();

        if ($cartItem) {
            $cartItem->update(['quantity' => $cartItem->quantity + $request->quantity]);
        } else {
            $cart->items()->create([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        return back()->with('success', 'Product added to cart.');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        if ($cartItem->cart->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        if ($cartItem->product->stock < $request->quantity) {
            return back()->with('error', 'Not enough stock available.');
        }

        $cartItem->update(['quantity' => $request->quantity]);

        return back()->with('success', 'Cart updated.');
    }

    public function remove(CartItem $cartItem)
    {
        if ($cartItem->cart->user_id !== Auth::id()) {
            abort(403);
        }

        $cartItem->delete();

        return back()->with('success', 'Item removed from cart.');
    }

    public function clear()
    {
        $cart = Auth::user()->cart;

        if ($cart) {
            $cart->items()->delete();
        }

        return back()->with('success', 'Cart cleared.');
    }
}
