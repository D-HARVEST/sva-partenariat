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
    protected $fillable = ['referenceAPI', 'Volume', 'Cout', 'Prix', 'AncienPrix', 'Validite', 'recharge_stock_id'];

    /**
     * Relation : Un DataPackage appartient à un RechargeStock.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rechargeStock()


    {
        return $this->belongsTo(RechargeStock::class, 'recharge_stock_id', 'id');
    }


/**
     * Vérifie si la table `data_packages` contient des données.
     *
     * @return bool
     */
    public static function hasData()
    {
        return self::exists();  // Retourne true si des enregistrements existent
    }

    /**
     * Vérifie si la collection de données est vide.
     *
     * @return bool
     */
    public static function isEmpty()
    {
        return self::all()->isEmpty();  // Retourne true si la collection est vide
    }

     /**
     * Retourne le nombre de données présentes dans la table.
     *
     * @return int
     */
    public static function countData()
    {
        return self::count();
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
