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
        dd(config('acc_types.saving'));
        switch ($type) {
            case config('acc_types.saving'):
                return new SavingAccount();
            default:
                return null;
        }
    }
}