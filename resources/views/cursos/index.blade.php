@extends('layout.plantilla')

@section('title', 'Cursos')

@section('content')
<h1 class="mt-5 mb-8 text-amber-900 text-3xl">Bienvenido a la página de cursos</h1>
<a href="{{ route('cursos.create') }}"
class="bg-sky-500 hover:bg-cyan.600 rounded-md ease-in-out duration-300 hover:underline text-white p-4 m-5">
    Crear nuevo curso
</a>
<ul class="my-10 bg-slate-100 p-5 leading-7 text-red-500 border-y-8">
    @foreach ($cursos as $curso )

        <li class="border-b-2 pt-2 border-grey-200 hover:text-slate-500">
            <a href="{{ route('cursos.show', $curso->id) }}">
                {{ $curso->name }}
            </a>
        </li>
        
    @endforeach
</ul>

{{$cursos->links()}}
@endsection
