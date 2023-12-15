@extends('layout')

@section('title', 'Fashion Realm | Cart')

@section('content')

    <div class="container mt-5">
        <h1>Your Shopping Cart</h1>
        @if ($cartItems->isNotEmpty())
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
                    @foreach ($cartItems as $item)
                        @php
                            $subtotal = $item->quantity * $item->product->price;
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->size }}</td>
                            <td>
                                <form action="{{ route('cart.update', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1"
                                        style="width: 60px;">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </td>
                            <td>Rp {{ $item->product->price }},00</td>
                            <td>Rp {{ $subtotal }},00</td>
                            <td>
                                <form action="{{ route('cart.destroy', ['id' => $item->id]) }}" method="POST">
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
            <form action="{{ route('cart.checkout') }}" method="GET">
                @csrf
                <button type="submit" class="btn btn-primary">Checkout</button>
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>

@endsection
