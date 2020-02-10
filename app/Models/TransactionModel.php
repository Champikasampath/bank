<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    protected $fillable = ['account_number', 'account_id', 'amount', 'action_type', 'current_balance'];
}
