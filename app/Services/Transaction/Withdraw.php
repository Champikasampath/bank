<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 12:01 PM
 */

namespace App\Services\Transaction;


class Withdraw extends Transaction
{
    /**
     * @var string 
     */
    protected $action_type = 'debit';
    /**
     * Withdraw constructor.
     *
     * @param int $amount
     */
    public function __construct($amount = 100)
    {
        parent::__construct();
        $this->setAmount($amount);
    }
    /**
     * @param $ano
     * @param $amount
     *
     * @return mixed
     */
    public static function create($ano, $amount)
    {
        $transaction = new Withdraw();
        $transaction->create($ano, $transaction->action_type, $amount);
        return $transaction->commit();
    }

    /**
     * setCurrentBalance
     */
    public function setCurrentBalance()
    {
        $account = $this->account_repository->read($this->account_number);
        $this->current_balance = $account->balance - $this->amount;
        $this->account_repository->update($this->account_number, ['balance' => $this->amount]);
    }
}