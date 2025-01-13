<?php

namespace App\Http\Controllers;

use App\Blossom\Customer;
use App\Blossom\PaymentProfile;
use App\Blossom\Transaction;
use App\Blossom\Paddle\Transaction as PaddleTransaction;

class TransactionController extends Controller
{
    /**
     * Display a list of transactions.
     */
    public function index()
    {
        $paymentProfile = PaymentProfile::class;
        $customer = Customer::class;
        $transaction = Transaction::class;
        $paddleTransaction = PaddleTransaction::class;

        return view(
            view: 'transaction.index',
            data: compact(
                'paymentProfile',
                'customer',
                'transaction',
                'paddleTransaction',
            )
        );
    }
}
