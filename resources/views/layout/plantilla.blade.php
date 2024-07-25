<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <style>
            .active {
                color: rgb(196, 79, 99);
            }
        </style>
        <!--link href="{{ asset('css/tailwind.css') }}" rel="stylesheet"-->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        @include('layout.partials.header')
        
        @yield('content')
    </body>
</html>