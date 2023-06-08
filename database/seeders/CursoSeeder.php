<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Crear Datos Seeder con Factory
        Curso::factory(50)->create();

        //Forma Manual sin factory
        /*
        $curso = new Curso();
        $curso->name = "Laravel";
        $curso->descripcion = "El mejor Framework libre de PHP en el año 2023";
        $curso->categoria = "Desarrollo WEB";
        $curso -> save();

        $curso2 = new Curso();
        $curso2->name = ".Net";
        $curso2->descripcion = "Desarrollo con tecnología Microsoft";
        $curso2->categoria = "Desarrollo WEB";
        $curso2 -> save();

        $curso3 = new Curso();
        $curso3->name = "Ingles Developer";
        $curso3->descripcion = "Ingles para desarrolladores";
        $curso3->categoria = "Idiomas";
        $curso3 -> save();
        */

    }
}
