<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <label for="fullname">Full Name:</label>
    <input type="text" name="fullname" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="phone">Phone:</label>
    <input type="text" name="phone">
    <label for="image">Image URL:</label>
    <input type="text" name="image">
    <button type="submit">Add Customer</button>
</form>