<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //
    public function index()
    {
        $cursos = Curso::orderBy('id','desc')->Paginate();
        //return dd($cursos);
        return view('cursos.index', compact('cursos'));
    }


    public function show(Curso $curso)
    {
        
        return view('cursos.show', compact('curso'));              
    }

    public function show_Forma2($id)
    {
        $curso = Curso::find($id);
        //return dd($cursos);

        return view('cursos.show', compact('curso'));
        
        //return view('cursos.show', compact('id')); // compact('curso') es equivalente a hacer ['curso' => $curso])

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

    //Store con asignación masiva y con validación de campos desde Form Request
    public function store(StoreCurso $request)
    {  

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso->id);
        //return view('cursos.create');
        
    }


    //Almacenamiento sin Asignación masiva y con validación de campos directa en el controlador
    public function store_Forma2(Request $request)
    {
        //"Crear cursos";
        //return dd($request->all());

        //Validación de campos directamente en el controlador
        /*$request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'

        ]);*/

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save();

        return redirect()->route('cursos.show',$curso->id);

        //return view('cursos.create');
        
    }

    public function edit(Curso $curso)
    {       
        
        return view('cursos.edit', compact('curso'));
        
    }

    //Update por Asignación masiva
    public function update(Request $request, Curso $curso)
    {  
        
        $request->validate([
                'name' => 'required|max:10',
                'descripcion' => 'required|min:10',
                'categoria' => 'required'

        ]);
        
        $curso->update($request->all());

        return redirect()->route('cursos.show',$curso->id);
        
    }


    public function update_forma2(Request $request, Curso $curso)
    {  
        
        $request->validate([
                'name' => 'required|max:10',
                'descripcion' => 'required|min:10',
                'categoria' => 'required'

        ]);
        
        $curso->name =$request->name;
        $curso->descripcion =$request->descripcion;
        $curso->categoria =$request->categoria;
        $curso->save();

        return redirect()->route('cursos.show',$curso->id);
        
    }


    // destroy / delete
    public function destroy(Curso $curso)
    {         
       
        $curso->delete();   
        return redirect()->route('cursos.index');
        
    }
    

}
