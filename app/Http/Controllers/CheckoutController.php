<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Cartalyst\Stripe\Stripe;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;

class CheckoutController extends Controller
{
    public function index()
    {
        $transaction = Transaction::where('user_id', auth()->user()->id)->where('status', 'waiting')->first();
        return view('checkout', [
            'transaction' => $transaction,
            'detail' => $transaction ? TransactionDetail::where('transaction_id', $transaction->id)->get() : []
        ]);
    }

    public function pay($id)
    {
        $transaction = Transaction::where('id', $id)->first();

        $stripe = new Stripe('sk_test_DhkphqpAtyR1Pt8HA890MVOb');
        $customer = $stripe->customers()->create([
            'email' => $transaction->user->email
        ]);
        // $stripe = new Stripe('sk_test_DhkphqpAtyR1Pt8HA890MVOb', 'pk_test_hkKvEhQfBdWxrrcl2df2jyi3');
        $charge = $stripe->charges()->create([
            'customer' => $customer['id'],
            'currency' => 'IDR',
            'amount'   => $transaction->total
        ]);

        // Update status
        $transaction->update(['status', 'lunas']);
        return redirect()->back();
    }
}
