<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmes extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule_programme',
        'description',
        'duree',
        'criteres_admisssion',
    ];
}
