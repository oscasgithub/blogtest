<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;


     //Relación Uno a Uno
     public function user(){

        //recuperación manual del registro del perfil del usuario. Relación de uno a uno
        /*$user = User::find($this->user_id);
        return $user;*/        

        //return $this->belongsTo(User::class, 'foreign_key', 'local_key'); 
        //el segundo parametro (foreign_key) debe tener el nombre de la llave foranea, en caso de que no se haya llamado la llave foranea siguiendo la convención [tabla_id].
        //el tercer parametro (local_key) debe tener el nombre de la llave primaria, en caso de que no se haya llamado la llave primaria siguiendo la convención [id].
        
        //return $this->belongsTo('App\Modesl\User'); //hace lo mismo que la linea de abajo
        return $this->belongsTo(User::class);

    }

}


