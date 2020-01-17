<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 1:57 PM
 */

namespace App\Services\Account;


interface AccountContract
{
    /**
     * @return mixed
     */
    public function getBalance();

    /**
     * @return mixed
     */
    public function setBalance($balance);

    /**
     * @return mixed
     */
    public function generateAccountNumber();
}