<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    public function PetiteEntreprise () 
    {
        return $this->hasMany(PetiteEntreprise::class);
    }
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mot_de_passe',
        'role'


    ];
}
