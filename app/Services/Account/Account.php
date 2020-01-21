<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 1:47 PM
 */

namespace App\Services\Account;


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

    public function getCustomer()
    {
        return $this->customer_id;
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
     *
     */
    public function calculateInterest()
    {
        
    }
}