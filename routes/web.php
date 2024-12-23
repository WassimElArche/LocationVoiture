<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerUtilisateur;

use App\Http\Controllers\ConnexionController;

use App\Http\Controllers\ControllerConnect;


Route::get('/inscription', [ControllerUtilisateur::class , 'formulaire']);

Route::post('/inscription' , [ControllerUtilisateur::class , 'create']);

Route::get('/mon-compte' , [ControllerConnect::class , 'index']);

Route::get('/connexion' ,[ConnexionController::class , 'formulaire']);

Route::post('/connexion' ,[ConnexionController::class , 'traitement']);

Route::get('/deconnect' , [ControllerConnect::class , 'deconnect']);