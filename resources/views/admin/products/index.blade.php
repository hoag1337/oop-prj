@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Products</h1>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>

                <hr>

                <form action="{{ route('products.search') }}" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control" name="query" placeholder="Search products...">    <label for="sort">Sort by:</label>
                        <select name="sort" id="sort">
                            <option value="price_asc">Price: Low to High</option>
                            <option value="price_desc">Price: High to Low</option>
                            <option value="name_asc">Name: A to Z</option>
                            <option value="name_desc">Name: Z to A</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                
                @foreach ($products as $product)
                    <!-- Product display code -->
                @endforeach
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('products.edit', ['id' => $product->id]) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form method="post" action="{{ route('products.destroy', ['id' => $product->id]) }}"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
