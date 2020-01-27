<?php

namespace App\Http\Controllers;

use App\Services\Account\AccountFactory;
use Illuminate\Http\Request;

class AccountsController extends Controller
{

    
    public function createAccount(Request $request)
    {
        try {
            $account = AccountFactory::init($request->input('type'));
            $account->setBalance(1000);
            $account->setCustomer($request->input('customer_id'));
            $response = $account->commit();
            return response()->json($response, '200');
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), '401');
        }
    }
}
