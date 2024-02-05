<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    public function typeProduit() 
    {
        return $this->belongsTo(typeProduit::class);
    }
    protected $fillable = [
        'libelle',
        'type',
        'prix',
        'image',
        'description',
        'quantiteStock'
    ];
}
