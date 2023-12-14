@extends('layout')

@section('title', 'Fashion Realm | Cart')

@section('content')

    <div class="container mt-5">
        <h1>Your Shopping Cart</h1>
        @if (count($products) > 0)
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($products as $index => $item)
                        @php
                            $subtotal = $item['quantity'] * $item['price'];
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td> <!-- Display a count or index -->
                            <td>{{ $item['name'] }}</td> <!-- Display product name -->
                            <td>{{ $item['size'] }}</td>
                            <td>
                                <form action="{{ route('cart.update', $index) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1"
                                        style="width: 60px;">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </td>
                            <td>Rp {{ $item['price'] }},00</td>
                            <td>Rp {{ $subtotal }},00</td>
                            <td>
                                <form action="{{ route('cart.destroy', $index) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-end"><strong>Total</strong></td>
                        <td colspan="2"><strong>Rp {{ $total }},00</strong></td>
                    </tr>
                </tfoot>
            </table>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>

@endsection
