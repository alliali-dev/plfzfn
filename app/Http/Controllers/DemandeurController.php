<?php

namespace App\Http\Controllers;

use App\Models\Demandeur;
use App\Models\Programme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DemandeurController extends Controller
{
    //
    public function create()
    {
        // retourne la page de creation d'demandeurs
        $users = User::select(["id", "nom", "prenoms"])->orderBy("nom", "ASC")->get();
        $programmes = Programme::select(["id", "libelle_programme"])->orderBy("libelle_programme", "ASC")->get();
        return view("demandeurs.new", compact('users', 'programmes'));
    }

    public function list()
    {
        // retourne la liste d'demandeurs
        $demandeurs = Demandeur::select("*")->orderBy("created_at", "DESC")->paginate(15);
        // dd($demandeurs);
        return view("demandeurs.list", compact('demandeurs'));
    }

    public function store(Request $request)
    { // enregistre une demandeurs
        //  on verifie les donnees soumises  
        $validator = Validator::make(
            $request->all(),
            ([
                "nom" => "required|string|max:50",
                "prenoms" => "required|string|max:70",
                "contact" => "required|string|max:10",
                "email" => "required|string|unique:demandeurs|max:50",
                "programme" => "required|integer",
            ]),
        );

        if ($validator->fails()) {
            // on retourne les erreurs 
            return back()->withErrors($validator)->withInput();
        }

        $new_demandeurs = new Demandeur(); //on appelle le model
        $new_demandeurs->nom = $request->nom; //on affecte les donnees du formulaire au champs de la table
        $new_demandeurs->prenoms = $request->prenoms;
        $new_demandeurs->contact = $request->contact;
        $new_demandeurs->email = $request->email;

        $new_demandeurs->role_id = $request->role;
        $new_demandeurs->save(); //on enregistre
        if ($new_demandeurs) {
            # code...
            return redirect()->route('demandeurs.list')->with('success', 'Enregistrement réussi!');
        } else {
            # code...
            return redirect()->back()->with('danger', 'Enregistrement Echoué!');
        }
    }
}
