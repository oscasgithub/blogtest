<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * php artisan make:migration create_cursos_table => Crea una nueva tabla.
     * php artisan migrate => Ejecuta las migraciones pendientes.
     * php artisan migrate:fresh => Elimina todas las tablas (SIN EJECUTAR método DOWN) y las vuelve a crear (Ejecuta Metodo UP). (Perdida de registros).
     * php artisan migrate:refresh =>  Elimina todas las tablas (EJECUTA método DOWN) y las vuelve a crear (Ejecuta Metodo UP).
     * php artisan make:migration add_tipodoc_to_users_table => Permite agregar una columna sin borrar datos
     * php artisan make:migration cambiar_propiedades_to_users_table  => Permite modificar propiedades de una columna.
     */


    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //No se puede almacenar campo NULL, sino se especifica explicitamente.
            $table->string('password');
            $table->string('avatar');
            //$table->unsignedTinyInteger('tipodoc');
            //$table->string('NumDoc', 30) ->unique();
            $table->rememberToken();
            $table->timestamps(); //created_at, update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }

};
