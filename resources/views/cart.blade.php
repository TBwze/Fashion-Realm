@extends('layout')

@section('title', 'Fashion Realm | Cart')

@section('content')
    <link rel="stylesheet" href="css/cart.css">
    <div class="container main">
        <div class="container">
            <h1 class="text-dark">Your Shopping Cart</h1>
            <div class="row" style="height: auto;">
                @if ($cartItems->isNotEmpty())
                    <div class="table-responsive">
                        <table class="table mt-6">
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
                                                <input type="number" name="quantity" value="{{ $item['quantity'] }}"
                                                    min="1" style="width: 60px;">
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
                        <form action="{{ route('cart.checkout') }}" method="GET" class="d-grid justify-content-md-end">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-md me-md-4 btn-dark"
                                style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: 1.50rem; --bs-btn-font-size: 1rem;">Checkout</button>
                        </form>
                    </div>
                @else
                    <p>Your cart is empty.</p>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
