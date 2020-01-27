<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 2:42 PM
 */

namespace App\Services\Account;

/**
 * Class SavingAccount
 * @package App\Services\Account
 */
class SavingAccount extends Account
{
    /**
     * SavingAccount constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed|string
     * generate acc numbers (will defer for account types)
     */
    public function generateAccountNumber()
    {
        $acc_number = config('constants.bank_code') . $this->branch_id . $this->customer_id . abs( crc32( uniqid() ) );
        return $acc_number;
    }

    public function getAccountDetails()
    {
        
    }
}