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
 * @property $recharge_stocks_id
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
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = ['referenceAPI', 'Volume', 'Cout', 'Prix', 'AncienPrix', 'Validite', 'recharge_stocks_id'];

    /**
     * Relation : Un DataPackage appartient à un RechargeStock.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rechargeStock()
    {
        return $this->belongsTo(RechargeStock::class, 'recharge_stocks_id', 'id');
    }

    /**
     * Attributs de type date
     * Laravel gère automatiquement les colonnes `created_at` et `updated_at`.
     * Si tu as d'autres colonnes de type date, ajoute-les ici.
     *
     * @var array<int, string>
     */
    protected $dates = ['created_at', 'updated_at'];
}
