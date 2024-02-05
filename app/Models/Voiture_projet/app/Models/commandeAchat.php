<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandeAchat extends Model
{
    use HasFactory;
    public function fournisseur ()
    {
        return $this->belongsTo(fournisseur::class);
    }
    

    protected $fillable = [
        'dateCommande',
        'fournisseur'
    ];
}
