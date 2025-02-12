<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  App\Models\User;

class Voiture extends Model
{
    protected $fillable = [
        'nom',
        'Km',
        'Type',
        'user_id',
        'moteur',
    ];

    public function voitures(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
