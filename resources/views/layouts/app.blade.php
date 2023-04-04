<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>

        @vite('resources/css/app.css')
    </head>
    <body class="flex">
        <div class="p-6">
            <h1 class="text-3xl font-black mb-6">KB</h1>

            <div class="relative group">
                <button class="sm:hidden bg-sky-600 focus:bg-sky-700 text-white py-1 px-2 rounded"><i class="fa fa-bars"></i></button>
            
                <nav class="w-48 hidden sm:block group-focus-within:block">
                    <a class="block bg-sky-600 text-white p-2 rounded font-semibold" href="#">
                        <i class="fa fa-home fa-fw"></i>
                        Dashboard
                    </a>
                    <a class="block p-2 font-semibold hover:text-sky-600" href="#">
                        <i class="fa fa-link fa-fw"></i>
                        Links
                    </a>
                    <a class="block p-2 font-semibold hover:text-sky-600" href="#">
                        <i class="fa fa-plane fa-fw"></i>
                        Vacation Tracker
                    </a>
                    <a class="block p-2 font-semibold hover:text-sky-600" href="#">
                        <i class="fa fa-scale-balanced fa-fw"></i>
                        Balancer
                    </a>
                </nav>
            </div>
        </div>
        <main class="p-6">
            {{ $slot }}
        </main>
    </body>
</html>
