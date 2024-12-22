<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasciAuthenticatable;

class Utilisateur extends Model implements Authenticatable {

    use BasciAuthenticatable;

protected $table = "utilisateur";

protected $fillable =  ['email','password'] ; 

}
