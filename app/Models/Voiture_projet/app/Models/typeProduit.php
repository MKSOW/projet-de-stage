<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeProduit extends Model
{
    use HasFactory;
    public function produit()
    {
        return $this->belongsTo(typeProduit::class);
    }
    protected $fillable = [
        'numero',
        'libelle'
    ];
}
