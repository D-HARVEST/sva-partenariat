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


}
