<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DataPackage
 *
 * @property $id
 * @property $referenceAPI
 * @property $Volume
 * @property $Cout
 * @property $Prix
 * @property $AncienPrix
 * @property $Validite
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DataPackage extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['referenceAPI', 'Volume', 'Cout', 'Prix', 'AncienPrix', 'Validite'];


}
