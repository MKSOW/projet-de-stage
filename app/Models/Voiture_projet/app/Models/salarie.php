<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salarie extends Model
{
    use HasFactory;
    public function service()
    {
        return $this->belongsTo(service::class);
    }
    public function vature()
    {
        return $this->belongsToMany(vature::class);
    }
    protected $fillable = [
        'codeSal',
        'nomSal',
        'prenomSal',
        'dateEmbauche',
        'dateNaissance',
        'fonction',
        'codeSer',
    ];
}
