<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        $cartItems = [];
        $totalPrice = 0;

        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);

            if ($product) {
                $itemPrice = $quantity * $product->price;

                $cartItems[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                    'itemPrice' => $itemPrice,
                ];

                $totalPrice += $itemPrice;
            }
        }

        return view('cart.index', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function add($productId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]++;
        } else {
            $cart[$productId] = 1;
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function remove($productId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product removed from cart successfully.');
    }
}