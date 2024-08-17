<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdmissionRequest;
use App\Http\Requests\ProgrammeRequest;
use Illuminate\Http\Request;
use App\Models\Candidat; // Importez le modèle Candidat
use App\Models\Candidats;
use App\Models\Demande_admission;
use App\Models\Pays;
use App\Models\Programmes;
use App\Models\User;

class PreInscriptionController extends Controller
{
    // Méthode pour afficher le formulaire de préinscription
    public function showForm()
    {
        $pays=Pays::all();
        $programmes=Programmes::all();
        return view('preinscription' ,['pays' =>$pays,'programmes'=>$programmes]); 
    }


    // Méthode pour traiter la soumission du formulaire
    public function submit(AdmissionRequest $requestUser,ProgrammeRequest $requestProgramme)
    {
        $requestvalidate=$requestUser->safe()->all();
        $requestvalidateProgramme=$requestProgramme->safe()->all();

        $requestvalidate['role_id']=2;
        $candidat=User::create($requestvalidate);
        $requestvalidateProgramme['user_id']=$candidat->id;
        $requestvalidateProgramme['date_soumission']=now();
        $admission=Demande_admission::create($requestvalidateProgramme);
        dd($candidat);      
            if($candidat instanceof User){
                return redirect()->back()->with('success', 'Préinscription réussie !');
            }

    }
}
