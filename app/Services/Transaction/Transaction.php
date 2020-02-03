<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 10:53 PM
 */

namespace App\Services\Transaction;


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

    public function setCurrentBalance()
    {
    }

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
     * @param $type
     * @param $amount
     *
     * @return mixed
     */
    public abstract static function create($ano, $type, $amount);
}