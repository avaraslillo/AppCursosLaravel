@extends('layout.plantilla')

@section('title', 'Curso '.$curso->name)

@section('content')

<div class="container m-auto">
    <h1 class="my-5 text-amber-900 text-3xl">Bienvenido a la pagina del curso 
        <span class="text-blue-500">{{ $curso->name }}</span>
    </h1>
    <a href="{{ route('cursos.index') }}" class="text-gray-300 bg-slate-950 hover:bg-slate-700 ease-in duration-200 rounded p-2">
        Volver a Cursos
    </a>
    <a href="{{ route('cursos.edit', $curso) }}" class="ml-3 text-gray-300 bg-slate-950 hover:bg-slate-700 ease-in duration-200 rounded p-2">
        Editando Cursos
    </a>
    
    <p class="my-5 text-zinc-800"><b>Descripción:</b> 
        <strong>{{ $curso->description }}</strong>
    </p>
    <p class="text-zinc-800 text-lg"><b>Categoría:</b> 
        <strong>{{ $curso->category }}</strong>
    </p>
    <form action="{{ route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit"
        class="bg-red-800 hover:bg-red-600 rounded-md ease-in-out duration-300 hover:underline text-white p-4">Eliminar Curso</button>
    </form>
</div>

@endsection
