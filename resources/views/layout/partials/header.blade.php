<header>
    <h1 class="my-5 font-bold text-4xl ml-3">LaneMasters</h1>
    <nav class="bg-slate-700 p-3 mb-5">
        <ul class="list-none flex space-x-10 text-white">
            <li><a href="{{ route('home') }}"
                class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{ route('cursos.index') }}"
                class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
            <li><a href="{{ route('nosotros') }}"
                class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
            <li><a href="{{ route('contactanos.index') }}"
                class="{{request()->routeIs('contactanos.*') ? 'active' : ''}}">Contactanos</a></li>
        </ul>
    </nav>
</header>