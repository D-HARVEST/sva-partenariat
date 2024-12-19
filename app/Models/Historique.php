<?php

namespace App\Models;

use App\Models\User;
use App\Models\DataPackage;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'data_package_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dataPackage()
    {
        return $this->belongsTo(DataPackage::class);
    }
}
