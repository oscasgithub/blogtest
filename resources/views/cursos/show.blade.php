@extends('layouts.plantilla')

@section('title', $curso->name)

@section('content')

<a href="{{ route('cursos.index') }}" class=""> Volver a Cursos </a> 
<br>
<a href="{{ route('cursos.edit',  $curso ) }}" class=""> Editar Curso </a> 

    <h1> Bienvenido al curso: {{ $curso->id }} - {{ $curso->name }} </h1>    

    <p class=""> <strong> Categoria: </strong> {{ $curso->categoria }}  </p>
    <p class=""> <strong> Descripción: </strong> {{ $curso->descripcion }}  </p>
    
    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')

        <button type="submit" > Eliminar </button>
    </form>

@endsection
