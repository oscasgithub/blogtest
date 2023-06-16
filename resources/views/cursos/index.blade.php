@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <h1> Bienvenido a la pagina inicial de cursos </h1>

    <a href="{{ route('cursos.create') }}"> Crear curso </a>

    <ul>
        @foreach ($cursos as $curso)      
            <li> {{ $curso->name }} - <a href={{ route('cursos.show', $curso->id) }} class=""> Ver Detalle </a></li>      
            
        @endforeach
    </ul>
         {{ $cursos->links() }}





@endsection
