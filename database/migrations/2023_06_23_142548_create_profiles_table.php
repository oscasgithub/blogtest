<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Maneja relación de uno a uno con Users
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();//entero grande sin signo

            $table->string('title',45);
            $table->text('biografia');
            $table->string('website',45);
            $table->unsignedBigInteger('user_id')->unique();//Campo Llave Foranea con User
            $table->foreign('user_id') //Se declara la llave foranea            
                ->references('id')
                ->on('users')
                ->onDelete('cascade') //cascade o set null (se debe hacer el campo nullable)
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
