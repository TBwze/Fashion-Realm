<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    //

    public function store($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        // Fetch transaction details or use relationships to retrieve transaction details
        return view('transactions.show', compact('transaction'));
    }

    public function show()
    {
        $transaction = Transaction::all();
        // Fetch transaction details or use relationships to retrieve transaction details
        return view('transaction', compact('transaction'));
    }
}
