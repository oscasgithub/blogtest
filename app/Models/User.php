<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Video;
use App\Models\Role;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Casts\Attribute;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    //Mutador y Accesor: Cambia la forma de definición con respecto a versiones anteriores
    protected function name(): Attribute
    {
        /*
        return new Attribute(
            get: function($value){
                return ucwords($value);
            },

            set: function($value){
                return strtolower($value);
            }
        );*/

        //Equivalente a lo anterior pero con funciones flecha
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    //Relación Uno a Uno
    public function profile(){

        //recuperación manual del registro del perfil del usuario. Relación de uno a uno
        /*$profile = Profile::where('user_id',$this->id)->first();
        return $profile;*/        

        //return $this->hasone(Profile::class, 'foreign_key', 'local_key'); 
        //el segundo parametro (foreign_key) debe tener el nombre de la llave foranea, en caso de que no se haya llamado la llave foranea siguiendo la convención [tabla_id].
        //el tercer parametro (local_key) debe tener el nombre de la llave primaria, en caso de que no se haya llamado la llave primaria siguiendo la convención [id].
        
        //return $this->hasone('App\Modesl\Profiles'); //hace lo mismo que la linea de abajo
        return $this->hasone(Profile::class);

    }

    //Relación Uno a Muchos. En plural, porque el usuario podrá escribir muchos posts
    public function posts(){        

        return $this->hasMany(Post::class);

    }

    //Relación Uno a Muchos
    public function videos(){        

        return $this->hasMany(Video::class);
    }

    public function comments()
    {
       return $this->hasMany(Comment::class);
    }

    //Relación Muchos a Muchos
    public function roles(){        

        return $this->belongsToMany(Role::class);
    }

    public function image()
    {
       return $this->morphOne(Image::class,'imageable');
    }

}
