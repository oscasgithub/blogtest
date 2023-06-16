@extends('layouts.plantilla')

@section('title', 'Creación de Cursos')

@section('content')

    <h1> Crear cursos </h1>
        

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf       
        

        <label>
            Nombre: <br>
            <input type="text" name="name" value="{{ old('name') }}">            
        </label>
        @error('name')
            <br>   
            <small> *{{ $message }} </small>
        @enderror
        
        <br><br>
        <label>
            Descripción:<br>
            <textarea name="descripcion" rows="5">{{ old('descripcion') }} </textarea>            
        </label>
        @error('descripcion')
            <br>   
            <small> *{{ $message }} </small>
        @enderror
        <br><br>
        <label>
            Categoria:<br>
            <input type="text" name="categoria" value="{{ old('categoria') }}">            
        </label>
        @error('categoria')
            <br>   
            <small> *{{ $message }} </small>
        @enderror

        <br><br>
        <button type="submit" > Enviar Formulario </button>
        

    </form>

@endsection
