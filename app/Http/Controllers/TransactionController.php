<?php

namespace App\Http\Controllers;

use App\Blossom\Transaction;
use App\Blossom\Paddle\Transaction as PaddleTransaction;

class TransactionController extends Controller
{
    /**
     * Display a list of transactions.
     */
    public function index()
    {
        return view('transaction.index', [
            'transaction' => Transaction::class,
            'paddleTransaction' => PaddleTransaction::class,
        ]);
    }
}
