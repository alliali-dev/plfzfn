<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;
use Illuminate\Support\Facades\Validator;

class ProgrammeController extends Controller
{
    //
    public function create()
    {
        // retourne la page de creation d'demandeurs
        // $users = User::select(["id", "nom", "prenoms"])->orderBy("nom", "ASC")->get();
        // $programmes = Programme::select(["id", "libelle_programme"])->orderBy("libelle_programme", "ASC")->get();
        return view("programmes.agr.new");
    }

    public function list()
    {
        // retourne la liste d'demandeurs
        $programmes = Programme::select("*")->orderBy("created_at", "DESC")->paginate(15);
        // dd($demandeurs);
        return view("programmes.agr.list", compact('programmes'));
    }

    public function store(Request $request)
    { // enregistre une demandeurs
        // dd($request->all());
        //  on verifie les donnees soumises  
        $validator = Validator::make(
            $request->all(),
            ([
                "nom" => "required|string|max:50",
                "prenoms" => "required|string|max:70",
                "date_naiss_demandeur" => "required|date",
                "lieu_naiss_demandeur" => "required|string|max:70",
                "sexe_demandeur" => "required|string|",
                "sp_lieu_naiss_demandeur" => "required|string",
                "nationalite_demandeur" => "required|string|max:50",
                "handicap_demandeur" => "required|string|max:10",
                // "type_handicap_demandeur" => "string",
                "nature_piece_demandeur" => "required|string|max:80",
                "piece_demandeur" => "required|between:1,5120", //taille en ko
                "numpiece" => "required|string|max:50",
                "contact1_demandeur" => "required|size:10",
                // "contact2_demandeur" => "string|size:10", //sometimes si le champ existe regex:/^([0-9]*)$/|
                "lieu_rh_demandeur" => "required|string|max:50",
                "sp_lieu_demandeur" => "required|string|max:50",
                "nivetude_demandeur" => "required|string|max:70",
                // "diplome_demandeur" => "string|max:50",
                // "annee_diplo_demandeur" => "date",
                // "specialite_demandeur" => "string|max:70",
                "pers_contact_urgent" => "required",
                "contact_pers" => "required",
                "occup_actu_demandeur" => "required",
                // "utilisateur" => "numeric|max:70",
                "programme" => "required",
            ]),
        );

        if ($validator->fails()) {
            // on retourne les erreurs 
            return back()->withErrors($validator)->withInput();
        }

        $new_demandeurs = new Programme(); //on appelle le model
        $new_demandeurs->nom = strtoupper($request->nom); //on affecte les donnees du formulaire au champs de la table
        $new_demandeurs->prenoms = ucfirst($request->prenoms);
        // $new_demandeurs->email = $request->email; 
        $new_demandeurs->sexe_demandeur = $request->sexe_demandeur;
        $new_demandeurs->date_naiss_demandeur = $request->date_naiss_demandeur;
        $new_demandeurs->lieu_naiss_demandeur = $request->lieu_naiss_demandeur;
        $new_demandeurs->sp_lieu_naiss_demandeur = $request->sp_lieu_naiss_demandeur;
        $new_demandeurs->nationalite_demandeur = $request->nationalite_demandeur;
        $new_demandeurs->handicap_demandeur = $request->handicap_demandeur;
        $new_demandeurs->type_handicap_demandeur = $request->type_handicap_demandeur;
        $new_demandeurs->nature_piece_demandeur = $request->nature_piece_demandeur;
        $new_demandeurs->piece_demandeur = $request->piecename;
        $new_demandeurs->numero_piece = $request->numpiece;
        $new_demandeurs->contact1_demandeur = $request->contact1_demandeur;
        $new_demandeurs->contact2_demandeur = $request->contact2_demandeur;
        $new_demandeurs->lieu_rh_demandeur  = $request->lieu_rh_demandeur;
        $new_demandeurs->sp_lieu_demandeur = $request->sp_lieu_demandeur;
        $new_demandeurs->nivetude_demandeur = $request->nivetude_demandeur;
        $new_demandeurs->diplome_demandeur = $request->diplome_demandeur;
        $new_demandeurs->annee_diplo_demandeur  = $request->annee_diplo_demandeur;
        $new_demandeurs->specialite_demandeur = $request->specialite_demandeur;
        $new_demandeurs->pers_contact_urgent = $request->pers_contact_urgent;
        $new_demandeurs->contact_pers = $request->contact_pers;
        $new_demandeurs->occup_actu_demandeur = $request->occup_actu_demandeur;
        $new_demandeurs->user_id = auth()->user()->id;
        $new_demandeurs->programme_id = $request->programme;
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
