<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 1:47 PM
 */

namespace App\Services\Account;


use App\Repositories\AccountsRepository;
use App\Services\User\Customer;

abstract class Account implements AccountContract
{

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
     * Account constructor.
     *
     * @param $branch_id
     * @param $customer_id
     */
    public function __construct()
    {
//        $this->branch_id = $branch_id;
//        $this->customer_id = $customer_id;
//        $this->calculateMonthlyInterest();
        $this->accounts_repository = new AccountsRepository();
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
     * @return mixed
     */
    public abstract function getAccountDetails();

    /**
     * calculate interest
     * Runs on month end
     */
    public function calculateMonthlyInterest()
    {
//        $this->interest = $this->balance * $this->interest_rate;
    }

    public function setInterest()
    {
        $this->interest = 0;
    }

    public function commit()
    {
        $this->accounts_repository->create([
            'account_number' => $this->accountNumber,
            'branch_id' => $this->branch_id,
            'customer_id' => $this->customer_id,
            'balance' => $this->balance,
        ]);
    }
}