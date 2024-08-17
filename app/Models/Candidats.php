<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidats extends Model
{
    use HasFactory;


protected $fillable = [
    'nom',
    'prenom',
    'genre',
    'lieu_naissance',
    'adresse',
    'email',
    'telephone',
    'niveau_etude',
    'serie',
    'Pays_origine',
];
public function submit(Request $request)
{
    $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'genre' => 'required|string|max:1',
        'lieu_naissance' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'date_naissance' => 'required|date',
        'telephone' => 'required|string|max:20',
        'niveau_etude' => 'required|string|max:255',
        'serie' => 'required|string|max:255',
        'pays_origine' => 'required|string|max:255',
        'niveau_integrer' => 'required|string|max:255',
    ]);


    return redirect()->back()->with('success', 'Préinscription réussie !');
}




// public function notif(): HasMany
// {
//     return $this->hasMany(Notifications::class,'notification');
// }

// public function demande_admission(): HasMany
// {
//     return $this->hasMany(Demandes_admission::class,'demander');
// }
}
