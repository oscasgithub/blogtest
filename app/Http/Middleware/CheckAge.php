<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     //Método que filtra la solicitudes. El Middleware debe ser registrado en Kernel.php
    public function handle(Request $request, Closure $next): Response
    {

        /*Ejemplo validación mayoría de edad
        if($request->age >= 18)
        {
            //Avanza a la pagina
            return $next($request);
        }
        else
        {
            //No avanza a la pagina y redirecciona
            return redirect('no-autorizado');
        }*/

        if(auth()->user()->email == "azhoa139@hotmail.com")
        {
            //Avanza a la pagina
            return $next($request);
        }
        else
        {
            //No avanza a la pagina y redirecciona
            return redirect('no-autorizado');
        }
        

        
    }
}
