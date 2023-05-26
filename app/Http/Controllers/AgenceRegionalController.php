<?php

namespace App\Http\Controllers;

use App\Models\Agence_regional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgenceRegionalController extends Controller
{
    //
    public function create()
    {
        // retourne la page de creation d'agence
        return view("parametres.agences.new");
    }

    public function list()
    {
        // retourne la liste d'agence
        $agences = Agence_regional::select("*")->orderBy("created_at", "DESC")->get();
        return view("parametres.agences.list", compact('agences'));
    }

    public function store(Request $request)
    { // enregistre une agence
        //  on verifie les donnees soumises  
        $validator = Validator::make(
            $request->all(),
            [
                "agence" => "required|string|max:100",
            ]
        );

        if ($validator->fails()) {
            // on retourne les erreurs 
            return back()->withErrors($validator)->withInput();
        }

        $new_agence = new Agence_regional(); //on appelle le model
        $new_agence->libelle_agence = $request->agence; //on affecte les donnees du formulaire au champs de la table
        $new_agence->save(); //on enregistre
        if ($new_agence) {
            # code...
            return redirect()->route('agence.list')->with('success', 'Enregistrement reussi!');
        } else {
            # code...
            return redirect()->back()->with('error', 'Enregistrement Echoue!');
        }
    }
}
