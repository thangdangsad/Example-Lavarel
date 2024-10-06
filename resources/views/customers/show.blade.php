<h1>Customer Details</h1>
<p><strong>ID:</strong> {{ $customer->id }}</p>
<p><strong>Full Name:</strong> {{ $customer->fullname }}</p>
<p><strong>Email:</strong> {{ $customer->email }}</p>
<p><strong>Phone:</strong> {{ $customer->phone }}</p>
<p><strong>Image:</strong> <img src="{{ $customer->image }}" alt="Customer Image"></p>
<a href="{{ route('customers.index') }}">Back to List</a>