<div>
<div id="fh5co-product-section">
		<div class="container">				
				@foreach ($products as $product)
				<div class="col-md-4 prod text-center animate-box">
						<div class="product" style="background-image: url({{$product->image}})" >
							<a href="#" class="view">
								<i class="icon-plus"> 
									{{$product->description}}
								</i>
							</a>
						</div>
						<h3><a href="#">{{$product->name}}</a></h3>
						<span class="price">$ {{$product->price}} </span>
					</div>
			@endforeach
		</div>
</div>
</div>
