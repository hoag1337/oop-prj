<div>
    <div>
        <h2>Cart</h2>
    
        <ul>
            @foreach ($cart as $productId => $quantity)
                <li>
                    {{ $product->name }} ({{ $quantity }}) - ${{ $product->price * $quantity }}
                    <button wire:click="removeFromCart({{ $productId }})">Remove</button>
                </li>
            @endforeach
        </ul>
    
        <button wire:click="clearCart()">Clear Cart</button>
    </div>
    
</div>
