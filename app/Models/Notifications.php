<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'statut',
        'contenu_notification',
        'date_notification',
       
    ];
    public function candidat(): BelongsTo
    {
        return $this->belongsTo(Candidats::class,'candiat');
    }

    
   
}
