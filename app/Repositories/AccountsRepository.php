<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 11:21 PM
 */

namespace App\Repositories;

use App\Models\AccountModel;
use App\Services\Account\AccountFactory;

class AccountsRepository
{
    public function create($data)
    {
        return AccountModel::create($data);
    }
}