<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 12:18 PM
 */

namespace App\Services\Transaction;


class TransactionFactory
{
    /**
     * @param $type
     * @param int $amount
     *
     * @return Withdraw|null
     * @throws \Exception
     * Minimum withdrawal amount is set to 100
     */
    public static function init($type, $amount = 100)
    {
        switch ($type) {
            case 'withdraw':
                return new Withdraw($amount);
            default:
                return null;
        }
    }
}