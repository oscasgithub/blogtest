<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //protected $table = 'users';
    //protected $table = 'Curso';

    //Permite la asignación masiva. Define que campos se pueden insertar de esa forma.
    protected $fillable = ['name', 'descripcion', 'categoria',];

    /*Para no tener que definir todos los campos con el array $fillable, que no es lo recomendable cuando hay muchos campos
    se puede usar los $guarded, para definir solo los campos que estén protegidos.*/
    //Define que campos estarán protegidos, es decir cuales no se van a guardar. Si no existen se puede crear el array $guarded como vacio.    
    protected $guarded = [];


}



