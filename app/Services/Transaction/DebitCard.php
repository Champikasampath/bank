<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 12:20 PM
 */

namespace App\Services\Transaction;


class DebitCard extends Transaction
{
    public function setCurrentBalance()
    {
        
    }

    public function calculateAllowedBalance()
    {
        
    }

    public static function create($ano, $amount)
    {
        $transaction = new DebitCard();
        $transaction->create($ano, $transaction->action_type, $amount);
        return $transaction->commit();
    }
}