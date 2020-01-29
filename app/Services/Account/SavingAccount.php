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
    protected $type;
    /**
     * SavingAccount constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->type = config("acc_types.saving");
        $this->generateAccountNumber();
    }

    /**
     * @return mixed|string
     * generate acc numbers (will defer for account types)
     */
    public function generateAccountNumber()
    {
        $acc_number = config('constants.bank_code') . $this->branch_id . $this->customer_id . abs( crc32( uniqid() ) );
        $this->accountNumber = $acc_number;
        return $acc_number;
    }

    public function getAccountDetails()
    {
        
    }
}