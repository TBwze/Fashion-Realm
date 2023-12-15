@extends('layout')

@section('title', 'Fashion Realm | Transaction History')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
        <h1>User Transactions</h1>
        @if ($transactions->isEmpty())
            <p>No transactions found for this user.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Total Items</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->transaction_date }}</td>
                            <td>Rp {{ $transaction->total_item }},00</td>
                            <td>
                                <button class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#details{{ $transaction->id }}" aria-expanded="false"
                                    aria-controls="details{{ $transaction->id }}" id="detailsButton{{ $transaction->id }}">
                                    Show Details
                                </button>
                                <div class="collapse" id="details{{ $transaction->id }}">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product Size</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction->details as $detail)
                                                <tr>
                                                    <td>{{ $detail->size }}</td>
                                                    <td>{{ $detail->quantity }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
