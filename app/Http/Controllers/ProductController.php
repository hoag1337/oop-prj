<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'))
            ->layout('layouts.app', ['title' => $product->name])
            ->livewire('cart');
    }
    
    public function search(Request $request)
{
    $query = $request->input('query');
    $products = Product::where('name', 'LIKE', "%$query%")->get();
    return route('products.search', compact('products'));
}
    public function sort(Request $request,Product $products)
    {
        $query = Product::query();
    
    $sort = $request->input('sort', 'price_asc');
    
    switch ($sort) {
        case 'price_asc':
            $query->orderBy('price', 'asc');
            break;
        case 'price_desc':
            $query->orderBy('price', 'desc');
            break;
        case 'name_asc':
            $query->orderBy('name', 'asc');
            break;
        case 'name_desc':
            $query->orderBy('name', 'desc');
            break;
        default:
            $query->orderBy('price', 'asc');
            break;
    }
    
    $products = $query->get();
    
    return ['product' => $products];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    if ($request->has('query')) {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%");
    } else {
        $products = Product::all();
    }
    $products = Sort($request,$products);
    
    return view('admin.products.index', compact('products'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.products.create');
}

public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'image' => 'required|image',]);

    // Upload the product image to the storage directory
    $imagePath = $request->file('image')->store('public');
    $imageUrl = Storage::url($imagePath);

    $product = new Product;
    $product->name = $validatedData['name'];
    $product->description = $validatedData['description'];
    $product->price = $validatedData['price'];
    $product->image = $imageUrl;
    $product->stock = $validatedData['stock'];
    $product->save();

    // Create a new product instance
    // $product = new Product;
    // $product->name = $validatedData['name'];
    // $product->description = $validatedData['description'];
    // $product->price = $validatedData['price'];
    // $product->stock = $validatedData['stock'];
    // $product->image = $imageUrl;
    // $product->save();

    return redirect()->route('products.index')
        ->with('success', 'Product created successfully.');
}


    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->save();
        return redirect()->route('products.index');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', ['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')
                     ->with('success','Product deleted successfully');
    }
}
