@extends('layouts.admin')
@section('title','Product editing')
@section('content')
<div class="container">
<div class="col-md-12">
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $product->description }}</textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" required>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}" required>
        <button type="submit">Save Changes</button>
    </form>
    
</div>
</div>
@endsection