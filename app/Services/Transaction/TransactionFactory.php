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
    public static function init($type, $amount)
    {
        switch ($type) {
            case 'withdraw':
                return new Withdraw($amount);
            default:
                return null;
        }
    }
}