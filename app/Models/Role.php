<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permiso;



class Role extends Model
{
    use HasFactory;

//Relación Muchos a Muchos
    public function users(){        

        return $this->belongsToMany(User::class);
    }

    //Relación Muchos a Muchos
    public function permisos(){        

        return $this->belongsToMany(Permiso::class);
    }

}
