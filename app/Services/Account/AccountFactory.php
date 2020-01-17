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
    public function getAccount($type)
    {
        if($type == null) {
            return null;
        }

        switch ($type) {
            case "saving":
                return new SavingAccount();
            case $type:
                return new SavingAccount();
        }
    }
}