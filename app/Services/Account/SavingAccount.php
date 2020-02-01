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
        $this->type = config('account.acc_types.saving');
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

    /**
     * @param $ano
     *
     * @return array|mixed
     * different account types will have different return types
     *
     */
    public function getAccountDetails($ano)
    {
        $data = $this->accounts_repository->read($ano);
        return [
            'type' => $data->type,
            'account_number' => $data->account_number,
            'balance' => $data->balance,
        ];
    }
}