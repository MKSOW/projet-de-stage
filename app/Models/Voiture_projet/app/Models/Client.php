<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function commandeVentye ()
    {
        return $this->belongsTo(commandeVentye::class);
    }
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'adresse',
        'ville',
        'numero_tel'
    ];
}
