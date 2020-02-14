<?php

namespace App\Http\Controllers;

use App\Services\Transaction\Transaction;
use App\Services\Transaction\TransactionFactory;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function createTransaction(Request $request)
    {
        try {
            $type = $request->input('type');
            $amount = $request->input('amount');
            $account_number = $request->input('account_number');
            $action_type = $request->input('action_type');
            $transaction = TransactionFactory::init('withdraw', 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
