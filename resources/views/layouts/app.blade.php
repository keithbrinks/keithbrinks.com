<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        <aside class="fixed w-72 p-4">
            <h1 class="text-3xl font-black mb-6">KB</h1>

            <nav>
                <x-app.nav-link icon="fa fa-home" current-page="{{ $navParent == 'dashboard' }}" href="{{ route('dashboard') }}">Dashboard</x-app.nav-link>
                <x-app.nav-link icon="fa fa-link" current-page="{{ $navParent == 'links' }}" href="{{ route('links.index') }}">Links</x-app.nav-link>
                <x-app.nav-link icon="fa fa-scale-balanced" current-page="{{ $navParent == 'balancer' }}" href="{{ route('balancer-sheets.index') }}">Balancer</x-app.nav-link>
                {{-- Vacation Tracker --}}
            </nav>
        </aside>
        <main class="w-full ml-72 border-l">
            
            <div class="border-b p-4">
                <h1 class="font-bold">{{ $header }}</h1>
            </div>
            
            <div class="p-4">
                {{ $slot }}
            </div>

        </main>
    </body>
</html>
