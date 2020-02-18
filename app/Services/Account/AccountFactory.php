<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 1:19 AM
 */

namespace App\Services\Account;


class AccountFactory
{
    public static function init($type)
    {
        switch ($type) {
            case config('account.acc_types.saving')://integer for each account type is stored in config files
            return new SavingAccount();
            default:
                return null;
        }
    }
}