<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class TransactionController extends Controller
{
    //
    public function showTransactions($userId)
    {
        $transactions = Transaction::where('user_id', $userId)->with('details')->get();
        return view('transactions', compact('transactions'));
    }
}
