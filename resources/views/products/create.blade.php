<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" required>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>
    <label for="description">Description:</label>
    <textarea name="description"></textarea>
    <button type="submit">Add Product</button>
</form>