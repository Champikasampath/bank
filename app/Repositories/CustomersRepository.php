<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 11:22 PM
 */

namespace App\Repositories;


use App\Models\CustomerModel;

class CustomersRepository
{
    public function create()
    {
        try {
            CustomerModel::create([]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}