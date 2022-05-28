<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function find_all()
    {
        $user = Auth::id();
        $transaction = Transaction::where('user_id', $user)->get();
        return view('book.transaction', [
            'transactions' => $transaction,
            'title' => 'kjhjk'
        ]);
    }
}
