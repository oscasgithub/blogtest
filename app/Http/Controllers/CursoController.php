<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //
    public function index()
    {
        $cursos = Curso::Paginate();
        //return dd($cursos);
        return view('cursos.index', compact('cursos'));

    }

    public function show($curso)
    {
        //
        return view('cursos.show', compact('curso')); // compact('curso') es equivalente a hacer ['curso' => $curso])

        /*El primer campo del array es el nombre de la varaible, como lo voy a tomar en la vista.
        //El segundo campo del array es el del valor que le voy a asignar en el presente controlador.
        Nombre de la variable definida en el prametro e entrada*/
        //return view('cursos.show', ['curso' => $curso]);

        //return "Mostrar curso" . $curso; // Se pueden pasar vistas, cadenas, recursos, etc
    }

    public function create()
    {
        return view('cursos.create');
        //return "Crear cursos";
    }
}
