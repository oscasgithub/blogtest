<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa
    public function user(){        

        return $this->belongsTo(User::class);

    }

    //Relación Uno a Muchos (Polimorfica)
    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    //Relación Muchos a Muchos (Polimorfica)
    public function posts()
    {
       return $this->morphToMany(Tag::class,'taggable');
    } 

}
