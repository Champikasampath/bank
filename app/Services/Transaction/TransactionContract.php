<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 10:54 PM
 */

namespace App\Services\Transaction;

interface TransactionContract
{
    /**
     * @param $amount
     *
     * @return mixed
     */
    public function setAmount($amount);

    /**
     * @return mixed
     */
    public function getAmount();

    /**
     * @param $ano
     *
     * @return mixed
     */
    public function setAccountNumber($ano);

    /**
     * @return mixed
     */
    public function getAccountNumber();

    /**
     * @param $type
     *
     * @return mixed
     */
    public function setActionType($type);

    /**
     * @return mixed
     */
    public function getActionType();
}