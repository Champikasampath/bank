<?php

namespace App\Http\Controllers;

use App\Services\Account\AccountFactory;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'customer_id' => 'required',
            'branch_id' => 'required'
        ]);//laravel default validation has been used

        try {
            $account = AccountFactory::init($request->input('type'));//init requested account type by passing the
            //type to AccountFactory
            $account->setBalance(1000);
            $account->setCustomer($request->input('customer_id'));
            $account->setBranchId($request->input('branch_id'));
            $response = $account->commit(); //save to database
            return response()->json($response, 200);// send response back to client
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $account = AccountFactory::init($request->input('type'));
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
