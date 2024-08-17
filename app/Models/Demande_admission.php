<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande_admission extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'statut',
        'date_soumission',
        'candidat',
        'programme'
       
    ];
    public function document(): BelongsTo
    {
        return $this->belongsTo(Documents::class,'document');
    }
    public function candidat(): BelongsTo
    {
        return $this->belongsTo(Candidats::class,'candidat');
    }


}
