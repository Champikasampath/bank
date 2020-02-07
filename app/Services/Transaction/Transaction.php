<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 10:53 PM
 */

namespace App\Services\Transaction;


use App\Repositories\AccountsRepository;
use App\Repositories\TransactionsRepository;

abstract class Transaction implements TransactionContract
{
    /**
     * @var
     */
    protected $amount;

    /**
     * @var
     */
    protected $action_type;

    /**
     * @var
     */
    protected $account_number;

    /**
     * @var
     */
    protected $current_balance;

    /**
     * @var TransactionsRepository
     */
    protected $transaction_repository;

    /**
     * @var AccountsRepository
     */
    protected $account_repository;

    /**
     * Transaction constructor.
     */
    public function __construct()
    {
        $this->transaction_repository = new TransactionsRepository();
        $this->account_repository = new AccountsRepository();
    }
    
    /**
     * @param $action
     *
     * @return mixed
     */
    public function setActionType($action) {
        $this->action_type = $action;
    }

    /**
     * @return mixed
     */
    public function getActionType()
    {
        return $this->action_type;
    }

    /**
     * @param $amount
     *
     * @return mixed|void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * @param $ano
     *
     * @return mixed|void
     */
    public function setAccountNumber($ano)
    {
        $this->account_number = $ano;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->account_number;
    }

    /**
     * setCurrentBalance
     */
    public abstract function setCurrentBalance();

    /**
     * @return mixed
     */
    public function getCurrentBalance()
    {
        return $this->current_balance;
    }

    /**
     * @param $ano
     * @param $type
     * @param $amount
     */
    protected function initTransaction($ano, $type, $amount) {
        $this->setAccountNumber($ano);
        $this->setActionType($type);
        $this->setAmount($amount);
    }

    /**
     * @param $ano
     * @param $amount
     *
     * @return mixed
     */
    public abstract static function create($ano, $amount);

    /**
     * save transaction data
     */
    public function commit()
    {
        $this->transaction_repository->create([
            'account_number' => $this->account_number,
            'amount' => $this->amount,
            'action_type' => $this->action_type,
            'current_balance' => $this->current_balance,
        ]);
    }
}