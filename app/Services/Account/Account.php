<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 1:47 PM
 */

namespace App\Services\Account;

use App\Repositories\AccountsRepository;
use App\Repositories\TransactionsRepository;
use App\Services\User\Customer;

abstract class Account implements AccountContract
{
    /**
     * @var
     */
    protected $type;
    /**
     * @var float
     */
    protected $balance = 0.00;

    /**
     * @var float
     */
    protected $interest = 0.00;

    /**
     * @var float
     */
    protected $interest_rate = 0.00;

    /**
     * @var int
     */
    protected $accountNumber;

    /**
     * @var int
     */
    protected $branch_id;

    /**
     * @var int
     */
    protected $customer_id;

    /**
     * @var AccountsRepository
     */
    protected $accounts_repository;

    /**
     * @var AccountsRepository
     */
    protected $transactions_repository;

    /**
     * @var int
     */
    protected $od_limit = 0;

    /**
     * Account constructor.
     */
    public function __construct()
    {
        $this->accounts_repository = new AccountsRepository();
        $this->transactions_repository = new TransactionsRepository();
    }

    /**
     * @return float|mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param $balance
     *
     * @return mixed|void
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getCustomer()
    {
        return $this->customer_id;
    }
    /**
     * @param $customer
     */
    public function setCustomer($customer)
    {
        $this->customer_id = $customer;
    }

    /**
     * @param $branch_id
     */
    public function setBranchId($branch_id)
    {
        $this->branch_id = $branch_id;
    }

    /**
     * @return int
     */
    public function getBranchId()
    {
        return $this->branch_id;
    }

    /**
     * @return mixed
     */
    public abstract function generateAccountNumber();

    /**
     * @param $ano
     *
     * @return mixed
     */
    public abstract function getAccountDetails($ano);

    /**
     * calculate interest
     * Runs on month end
     */
    public function calculateMonthlyInterest()
    {
//        $this->interest = $this->balance * $this->interest_rate;
    }

    public function calculateDailyInterest()
    {
        $this->interest = ($this->balance * $this->interest_rate / 100);
    }


    /**
     * set calculated interest to the date
     */
    public function setInterest()
    {
        $this->interest = 0;
    }

    /**
     * save changes to the account
     */
    public function save()
    {
        $this->accounts_repository->create([
            'account_number' => $this->accountNumber,
            'type' => $this->type,
            'branch_id' => $this->branch_id,
            'customer_id' => $this->customer_id,
            'balance' => $this->balance,
        ]);
    }

    /**
     * update records
     */
    public function update()
    {
        $this->accounts_repository->update($this->accountNumber,[
            'type' => $this->type,
            'branch_id' => $this->branch_id,
            'customer_id' => $this->customer_id,
            'balance' => $this->balance,
        ]);
    }

    public function getStatement($from, $to)
    {

    }

    public function deactivateAccount($id)
    {
        
    }
}