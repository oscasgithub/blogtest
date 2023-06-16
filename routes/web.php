<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


//Forma 1: Forma basica de definir las rutas
Route::get('/', HomeController::class);
Route::get('home', HomeController::class);


//Forma 2: Grupo de Rutas por Controlador
/*GRUPO DE RUTAS */
/*Route::controller(CursoController::class)->group(function () {
    route::get('cursos', 'index')->name("cursos.index");
    route::get('cursos/create', 'create')->name("cursos.create");
    route::get('cursos/{curso}', 'show')->name("cursos.show");
    route::post('cursos','store')->name("cursos.store");
    route::get('cursos/{curso}/edit', 'edit')->name("cursos.edit");
    route::put('cursos/{curso}','update')->name("cursos.update");
    route::delete('cursos/{curso}','destroy')->name("cursos.destroy");
    
});*/



//Forma 3
/* RUTAS POR RECURSO */
Route::resource('cursos', CursoController::class);

//si despues de haber realizado el desarrollo quisiera cambiar el nombre de las rutas de cursos por asignaturas
//Solo si necesito sobreescribir el nombre de las rutas por algún cambio posterior
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');



/*RUTAS CON ESTRUCTURA A PARTIR DE LARAVEL 8
    //Desde laravael 7 hacia atrás se manejan ell llamado al controlador de la siguiente forma:
    //NameController@NameMetodoController

route::get('cursos', [CursoController::class, 'index']);
route::get('cursos/{curso}', [CursoController::class, 'show']);
route::get('cursos/create', [CursoController::class, 'create']);
*/



/*RUTAS EJEMPLO INICIAL:Manejo de las rutas dentro de el propio archivo
Route::get('clases', function () {
    return "Listado de clases";
});


Route::get('clases/{cursos}/{category?}', function (string $cursos, string $category = null) {

    if ($category) {
        return "- Bienvenido al curso: " . $cursos . " Categoria: " . $category;
    } else {
        return "- Bienvenido al curso: " . $cursos;
    }
});


Route::get('clases/{curso}', function (string $curso) {
    return "clases y cursos: " . $curso;
});

*/
