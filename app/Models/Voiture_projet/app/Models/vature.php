<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vature extends Model
{
    use HasFactory;
    public function salarie()
    {
        return this->belongsToMany(salarie::class);
    }
    protected $fillable = [
        'matricule',
        'marque',
        'couleur',
        'dateMiseEnCirculation',
    ];
}
