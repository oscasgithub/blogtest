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



Route::get('/', HomeController::class);
Route::get('home', HomeController::class);


/*GRUPO DE RUTAS */
Route::controller(CursoController::class)->group(function () {
    route::get('cursos', 'index');
    route::get('cursos/create', 'create');
    route::get('cursos/{curso}', 'show');
});


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
