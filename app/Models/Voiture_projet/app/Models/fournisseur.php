<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    use HasFactory;
    public function commandeAchat ()
    {
        return $this->belongsTo(commandeAchat::class);
    }
    protected $fillable = [
        'nom',
        'telephone',
        'email',
        'ville',
        'adresse'
    ];
}
