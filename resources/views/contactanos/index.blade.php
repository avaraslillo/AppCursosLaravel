@extends('layout.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1 class="mb-8 text-amber-900 text-3xl text-center">Déjanos un mensaje</h1>
    <div class="container w-11/12 max-w-screen-md m-auto">
        <form action="{{ route('contactanos.store')}}" method="POST">
            @csrf
            <label for="name">
                Nombre
                <br>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="email">
                Correo
                <br>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="message">
                Mensaje
                <br>
                <textarea name="message" id="message" rows="4" value="{{ old('message') }}"
                class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none"></textarea>
            </label>
            @error('message')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <br>
            <button type="submit" class="block mx-auto bg-sky-500 hover:bg-cyan-600 rounded-md ease-in-out duration-300 hover:underline text-white p-4">
                Enviar mensaje
            </button>
        </form>
    </div>
    @if(session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif    
@endsection