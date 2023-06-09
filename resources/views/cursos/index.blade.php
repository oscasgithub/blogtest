@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <h1> Bienvenido a la pagina inicial de cursos </h1>

<a href="cursos/create"> Crear curso </a>


    <ul>
        @foreach ($cursos as $curso)
            <li> {{ $curso->name }} </li>
        @endforeach
    </ul>


         {{ $cursos->links() }}
@endsection
