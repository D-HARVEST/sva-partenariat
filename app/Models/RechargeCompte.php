<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RechargeCompte
 *
 * @property $id
 * @property $Libelle
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RechargeCompte extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Libelle'];


}
