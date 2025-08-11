<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-100">'//'
        <main class="mt-24 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-3">
            <h1>Hola</h1>
        </main>
        @livewire('layout.footer')
        @livewireScripts
    </body>
</html>
