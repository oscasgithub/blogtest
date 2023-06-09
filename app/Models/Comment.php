<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Comment extends Model
{
    use HasFactory;
    
    //Relación Uno a Muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     //Relación Uno a Muchos (Polimorfica)
     public function commentable()
     {
        return $this->morphTo();
     }

}
