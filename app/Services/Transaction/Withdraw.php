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
     * @param $type
     * @param $amount
     *
     * @return mixed
     */
    public static function create($ano, $type, $amount)
    {
        $transaction = new Withdraw();
        $transaction->create($ano, $type, $amount);
        return $transaction->commit();
    }
}