<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        // retourne la page de creation d'users
        $role = Role::select(["id", "libelle_role"])->orderBy("libelle_role", "ASC")->get();
        return view("parametres.users.new", compact('role'));
    }

    public function list()
    {
        // retourne la liste d'users
        $utilisateurs = User::select("*")->orderBy("created_at", "DESC")->paginate(15);
        // dd($users);
        return view("parametres.users.list", compact('utilisateurs'));
    }

    public function store(Request $request)
    { // enregistre une users
        //  on verifie les donnees soumises  
        $validator = Validator::make(
            $request->all(),
            ([
                "nom" => "required|string|max:50",
                "prenoms" => "required|string|max:70",
                "contact" => "required|string|max:10",
                "email" => "required|string|unique:users|max:50",
                "password" => "required|string|min:12",
                "role" => "required|integer",
            ]),
        );

        if ($validator->fails()) {
            // on retourne les erreurs 
            return back()->withErrors($validator)->withInput();
        }

        $new_users = new User(); //on appelle le model
        $new_users->nom = $request->nom; //on affecte les donnees du formulaire au champs de la table
        $new_users->prenoms = $request->prenoms;
        $new_users->contact = $request->contact;
        $new_users->email = $request->email;
        $new_users->password = Hash::make($request->password);
        $new_users->role_id = $request->role;
        $new_users->save(); //on enregistre
        if ($new_users) {
            # code...
            return redirect()->route('users.list')->with('success', 'Enregistrement réussi!');
        } else {
            # code...
            return redirect()->back()->with('danger', 'Enregistrement Echoué!');
        }
    }
    //
}
