<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\User;
use App\Models\Categoria;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Tag;


class Post extends Model
{
    use HasFactory;

       //Relación Uno a Muchos (inversa)
       public function user(){        

        return $this->belongsTo(User::class);

    }

     //Relación Uno a Muchos (inversa)
    public function categoria(){        

        return $this->belongsTo(Categoria::class);

    }

     //Relación Uno a Uno (Polimorfica)
     public function image()
     {
        return $this->morphOne(Image::class,'imageable');
     }

     //Relación Uno a Muchos (Polimorfica)
     public function comments()
     {
        return $this->morphMany(Comment::class,'commentable');
     }     

     
     //Relación Muchos a Muchos (Polimorfica)
     public function posts()
     //public function tags()
     {
        return $this->morphToMany(Tag::class,'taggable');
     }     




}
