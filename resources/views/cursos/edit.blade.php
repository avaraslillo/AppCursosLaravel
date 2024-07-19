@extends('layout.plantilla')

@section('title', 'Edit')

@section('content')
<h1 class="ml-3 mb-8 text-amber-900 text-3xl">Página para editar cursos</h1>
.
<div class="container w-11/12 max-w-screen-md m-auto">
    <form action="{{ route('cursos.update', $curso)}}" method="POST" class="bg-gray-100 p-3">
        @csrf
        @method('put')
        <label for="">Nombre<br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}"
            class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
        </label>
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br></br>
        <label for="">Descripción<br>
            <textarea  name="description"
            class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">{{old('description', $curso->description) }}
            </textarea>
        </label>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br></br>
        <label for="">Categoría<br>
            <input type="text" name="category" value="{{old('category', $curso->category) }}"
            class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
        </label>
        @error('category')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br></br>
        <button type="submit"
        class="block mx-auto bg-sky-500 hover:bg-cyan-600 rounded-md ease-in-out duration-300 hover:underline text-white p-4">
            Actualizar curso
        </button>
    </form>
</div>  



@endsection
