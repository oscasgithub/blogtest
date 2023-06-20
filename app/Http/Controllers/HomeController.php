<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*NOTAS GENERALES

    //1. No colocar nombre del proyecto en mayusculas porque genera error al redireccionar rutas

    //2. Se puede crear un host virtual accedieno en la siguiente ruta: C:\Windows\System32\drivers\etc
    //ver como hacerlo en https://www.youtube.com/watch?v=HzygRlPmYQc&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=7
*/

class HomeController extends Controller
{
    //invoke es para que el controldor administre una unica ruta
    public function __invoke()
    {
        return view('home');
        //return view('welcome');
    }
}
