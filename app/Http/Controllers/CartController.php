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

        return route('cart.index', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function addToCart(Request $request, $id)
{
    $product = Product::find($id);

    if(!$product) {
        abort(404);
    }

    $cart = session()->get('cart');

    // If cart is empty then this will be the first product
    if(!$cart) {
        $cart = [                $id => [                    "name" => $product->name,                    "quantity" => 1,                    "price" => $product->price,                    "photo" => $product->photo                ]
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // If the product is already in cart then increase the quantity
    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // If the product is not in cart then add it to cart with quantity = 1
    $cart[$id] = [            "name" => $product->name,            "quantity" => 1,            "price" => $product->price,            "photo" => $product->photo    ];
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart successfully!');
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