<?php

namespace App\Http\Controllers;

use App\Services\User\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * @param Request $request
     *
     * @return string
     */
    public function createCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);//validation
        try {
            $name = $request->input('name');
            $address = $request->input('address');
            return Customer::create($name, $address);//use of customer service's static factory method
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateCustomer($id, $data)
    {

    }

    public function deleteCustomer()
    {

    }

    public function getCustomer()
    {

    }
}
