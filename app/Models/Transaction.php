<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Volume', 'Cout', 'Prix', 'Validite', 'Statut', 'idPaiement', 'Telephone', 'isPaied ', 'isSent ', 'isSentAt ', 'user_id', 'data_package_id', 'ModePaiement','created_at', 'updated_at'];


    public function dataPackage()
{
    return $this->belongsTo(DataPackage::class);
}

public function user()
{
    return $this->belongsTo(User::class);

}

}