<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{

    protected $fillable = [
        'trxs_id', 'username', 'nationality',
        'is_visa', 'doe_passport'
    ];

    protected $hidden = [];

    public function transaction() {
        return $this->belongsTo(Transaction::class, 'trxs_id', 'trx_id');
    }
}
