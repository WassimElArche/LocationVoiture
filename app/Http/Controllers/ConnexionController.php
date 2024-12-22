<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;

class ConnexionController extends Controller 


{
    public function formulaire(){
        return view('connexion');
    }

    public function traitement(){

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if($result){
            return "ok";
        }

        return back()->withErrors("Login/mdp incorrecte");

    }



}
