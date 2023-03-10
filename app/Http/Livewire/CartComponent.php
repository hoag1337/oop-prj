<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartComponent extends Component
{
    public $cart = [];
    public function mount()
    {
        $this->cart = session('cart', []);
    }
    public function addToCart($productId)
    {
        if (!isset($this->cart[$productId])) {
            $this->cart[$productId] = 1;
        } else {
            $this->cart[$productId]++;
        }

        session(['cart' => $this->cart]);
    }
    public function removeFromCart($productId)
{
    if (isset($this->cart[$productId])) {
        unset($this->cart[$productId]);
        session(['cart' => $this->cart]);
    }
}
public function clearCart()
{
    $this->cart = [];
    session(['cart' => $this->cart]);
}


}