<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande_admission extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_soumission',
        'niveau_etude',
        'user_id',
        'programme_id',
       
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
