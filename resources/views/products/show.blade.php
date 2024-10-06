<h1>Product Details</h1>
<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Price:</strong> {{ $product->price }}</p>
<p><strong>Quantity:</strong> {{ $product->quantity }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>
<a href="{{ route('products.index') }}">Back to List</a>