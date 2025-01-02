<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class ControllerConnect extends Controller
{
    
    public function index(){



        $email = "elarchewassim@gmail.com";
        
        if(auth()->user()->email === $email){
            return redirect('/admin');
        }

        if (!auth()->check()){
            return redirect('/connexion');
        }

       
            return view('connecter');
    }

    public function deconnect(){
        auth()->logout();

        return redirect('/connexion');

    }


    public function formulaireUpdate(){
        return view('update');
    }

    public function update(){
        if(!auth()->check()){
            return redirect('/connexion');

        }

        auth()->user()->update([
            'password'=> bcrypt(request('password'))
        ]);

        return redirect('/mon-compte');
    }

    public function voir(){

if(auth()->user() && auth()->user()->email === "elarchewassim@gmail.com"){
        $user = Utilisateur::all();
        return view('user' , [
            'utilisateur' => $user
        ]);}

else return redirect('/connexion');


    }

    public function formulaireAdmin(){

        if (auth()->user()->email === "elarchewassim@gmail.com"){

        
        return view('formulaireAdmin');
    }
        return redirect('/connexion');

    }


    public function suppAdmin(Request $request){

        $email = $request->route('email');
        $elo = Utilisateur::where('email' , $email)->get();
        if($elo && $email != "elarchewassim@gmail.com"){
            $elo->each->delete();
        }
        
        return redirect('/admin')->withErrors("Impossible de supprimer l'admin");
    }
}
