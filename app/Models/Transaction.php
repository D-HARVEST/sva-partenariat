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
    protected $fillable = ['Volume', 'Cout', 'Prix', 'Validite ', 'Statut', 'idPaiement', 'Telephone', 'isPaied ', 'isSent ', 'isSentAt ', 'created_at', 'updated_at'];


}
