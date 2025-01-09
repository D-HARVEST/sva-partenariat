<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RechargeStock
 *
 * @property $id
 * @property $Volume
 * @property $Observation
 * @property $ExpireAt
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RechargeStock extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Volume', 'Observation', 'recharge_compte_id', 'ExpireAt','Type'];

    public function mvmStock()
    {
        return $this->hasMany(MvmStock::class, 'recharge_stock_id', 'id');
    }

    public function recharge_compte()
{
    return $this->belongsTo(RechargeCompte::class, 'recharge_compte_id', 'id');
}
}
