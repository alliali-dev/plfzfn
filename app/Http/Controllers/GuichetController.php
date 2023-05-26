<?php

namespace App\Http\Controllers;

use App\Models\Agence_regional;
use App\Models\Guichet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuichetController extends Controller
{
    public function create()
    {
        // retourne la page de creation d'guichet
        $agence = Agence_regional::select(["id", "libelle_agence"])->orderBy("libelle_agence", "ASC")->get();
        return view("parametres.guichets.new", compact('agence'));
    }

    public function list()
    {
        // retourne la liste d'guichet
        $guichets = Guichet::select("*")->orderBy("created_at", "DESC")->paginate(15);
        // dd($guichets);
        return view("parametres.guichets.list", compact('guichets'));
    }

    public function store(Request $request)
    { // enregistre une guichet
        //  on verifie les donnees soumises  
        $validator = Validator::make(
            $request->all(),
            [
                "guichet" => "required|string|max:100",
                "agence" => "required|integer|max:10",
            ]
        );

        if ($validator->fails()) {
            // on retourne les erreurs 
            return back()->withErrors($validator)->withInput();
        }

        $new_guichet = new Guichet(); //on appelle le model
        $new_guichet->libelle_guichet = $request->guichet; //on affecte les donnees du formulaire au champs de la table
        $new_guichet->agence_regional_id = $request->agence;
        $new_guichet->save(); //on enregistre
        if ($new_guichet) {
            # code...
            return redirect()->route('guichet.list')->with('success', 'Enregistrement réussi!');
        } else {
            # code...
            return redirect()->back()->with('danger', 'Enregistrement Echoué!');
        }
    }
    //
}
