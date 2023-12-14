@extends('navbar')

@section('title', 'Transaction History')

@section('content')
    <div class="container mt-4">
        <h1>Transaction Details</h1>

        <!-- Transaction Information -->
        <div class="card mt-4">
            <div class="card-header">
                Transaction Info
            </div>
            <div class="card-body">
                <p><strong>Transaction ID:</strong> {{ $transaction->id }}</p>
                <p><strong>User ID:</strong> {{ $transaction->user_id }}</p>
                <p><strong>Date:</strong> {{ $transaction->transaction_date }}</p>
                <p><strong>Total Amount:</strong> Rp {{ $transaction->total_amount }},00</p>
            </div>
        </div>

        <!-- Transaction Details -->
        <div class="card mt-4">
            <div class="card-header">
                Transaction Details
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <!-- Add more details if needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactionDetails as $index => $detail)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $detail->product_name }}</td>
                                <td>{{ $detail->size }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <!-- Add more details if needed -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
