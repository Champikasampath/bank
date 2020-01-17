<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 1:47 PM
 */

namespace App\Services\Account;


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

    public function __construct()
    {
        
    }
    
    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public abstract function generateAccountNumber();
    public abstract function getAccountDetails();

    public function calculateInterest()
    {
        
    }
}