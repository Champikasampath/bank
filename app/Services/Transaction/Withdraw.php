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
     * @param $ano
     * @param $type
     * @param $amount
     *
     * @return mixed
     */
    public static function create($ano, $type, $amount)
    {
        return (new Withdraw())->create($ano, $type, $amount);
    }
}