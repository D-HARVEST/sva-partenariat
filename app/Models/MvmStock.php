<?php

namespace App\Models;

use App\Models\rechargeStock;
use Illuminate\Database\Eloquent\Model;

class MvmStock extends Model
{
    protected $fillable = ['recharge_stock_id', 'transaction_id', 'Type', 'Quantite'];

    public function rechargeStock()
    {
        return $this->belongsTo(rechargeStock::class, 'recharge_stock_id', 'id');
    }

    public function transaction()
    {
        return $this->belongsTo(\App\Models\Transaction::class, 'transaction_id', 'id');
    }
}
