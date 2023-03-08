<div>
    <div class="col-md-8 col-md-offset-2 animate-box text-center">
        <h2 class="intro-heading">Products</h2>
        {{-- <p><span>Created with <i class="icon-heart3"></i> by d2hoag.</span></p> --}}
    </div>
    <div class="wrap">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="What are you looking for?">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>
    <div id="fh5co-product-section">
        <div class="container">
            <form action="{{ route('products.index') }}" method="GET">
                <label for="sort">Sort by:</label>
                <select name="sort" id="sort">
                    <option value="price_asc">Price: Low to High</option>
                    <option value="price_desc">Price: High to Low</option>
                    <option value="name_asc">Name: A to Z</option>
                    <option value="name_desc">Name: Z to A</option>
                </select>
                <button type="submit">Sort</button>
            </form>
            @foreach ($products as $product)
            <div class="col-md-4 prod text-center animate-box">
                    {{-- <div class="product" style="background-image: url({{$product->image}})" >
                        <a href="#" class="view">
                            <i class="icon-plus"> 
                                {{$product->description}}
                            </i>
                        </a>
                    </div> --}}
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" />
                    <h3><a href="#">{{$product->name}}</a></h3>
                    <span class="price">${{$product->price}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
