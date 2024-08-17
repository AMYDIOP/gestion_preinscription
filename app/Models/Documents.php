<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documents extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'chemin_fichier',
        'date_telechargement',
        'candidat'
       
    ];
    public function demandr_admission(): HasMany
{
    return $this->hasMany(Demandes_admission::class,'');
}
}
