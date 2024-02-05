<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande_vente extends Model
{
    use HasFactory;
    public function client ()
    {
        return $this->belongsTo(client::class);
    }
    protected $fillable = [
        'dateCommande',
        'client'
    ];
}
