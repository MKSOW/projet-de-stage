<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisation extends Model
{
    use HasFactory;
    public function vature()
    {
        return $this->belongsToMany(vature::class);

    }
    public function salarie ()
    {
        return $this->belongsToMany(salarie::class);
    }
    protected $fillable = [
        'matricule',
        'codeSal',
        'dateDebutUtilisation',
        'dateFinUtilisation',
    ];
}
