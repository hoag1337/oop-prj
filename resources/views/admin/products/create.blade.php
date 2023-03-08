@extends('layouts.admin')
@section('title','Add  a product')
@section('content')
<style>
     div 
    {  
            padding: 10px 0;  
    }  
    input[type=text], input[type=password], textarea {  
        width: 100%;  
        padding: 15px;  
        margin: 5px 0 22px 0;  
        display: inline-block;  
        border: none;  
        background: #f1f1f1;  
        }  
        .container {  
    padding: 50px;  
  background-color: #Bfc1ee;  
}  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
 
}  
.save_button {  
  background-color:rgba(253,219,158,255);  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.save_button:hover {  
  opacity: 1;  
}  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
</style>
<body>
<div class="container">
<div class="col-md-12">
<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ old('price') }}" required>
    </div>
    <div>
        <label for="stock">Number in stock:</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock') }}" required>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" name="image" class="form-control-file" id="image" accept="image/*" required>
  </div>
    <div>
        <button class="save_button" type="submit">Create Product</button>
    </div>
</form>
</div>
</div>
</body
@endsection