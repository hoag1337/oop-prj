<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::inRandomOrder()->take(3)->get();
        return view('livewire.home-component',['products' => $products]);
    }
}