<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerConnect extends Controller
{
    
    public function index(){

        if (!auth()->check()){
            return redirect('/connexion');
        }

        
            return view('connecter');
    }

    public function deconnect(){
        auth()->logout();

        return redirect('/connexion');

    }
}
