<?php

namespace App\Http\Controllers;

use App\Services\Transaction\Transaction;
use App\Services\Transaction\TransactionFactory;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function createTransaction(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'amount' => 'required',
            'account_number' => 'required',
            'action_type' => 'required',
        ]);
        try {
            $type = $request->input('type');
            $amount = $request->input('amount');
            $account_number = $request->input('account_number');
            $action_type = $request->input('action_type');
            $transaction = TransactionFactory::init('withdraw', 200);
            $transaction->setActionType($action_type);
            $transaction->setAccountNumber($account_number);
            $transaction->setAmount($amount);
            $transaction->commit();
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
