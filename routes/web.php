<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerUtilisateur;

use App\Http\Controllers\ConnexionController;

Route::get('/inscription', function () {
    return view('welcome');
});

Route::post('/inscription' , [ControllerUtilisateur::class , 'create']);

Route::view('/connexion' , 'connexion');

Route::post('/connexion' ,[ConnexionController::class , 'traitement']);