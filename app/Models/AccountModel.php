<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    protected $fillable = ['account_number', 'type', 'balance', 'customer_id'];

    protected $table = 'accounts';
}
