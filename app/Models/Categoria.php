<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;

class Categoria extends Model
{
    use HasFactory;

    //Relación de uno a muchos 
    public function posts(){        

        return $this->hasMany(Post::class);

    }    

}
