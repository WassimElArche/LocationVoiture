<?php


namespace App\Http\Controllers;

use App\Models\Utilisateur;

class ControllerUtilisateur extends Controller{

    public function create(){
        Utilisateur::create([
            "email" => request('email') , 
            'password'=> bcrypt(request('password'))
        ]);
        return redirect('/connexion')->with('Compte bien créer');
    }

}
