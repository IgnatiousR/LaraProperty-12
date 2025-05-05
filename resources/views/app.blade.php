<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/js/app.js')
        @inertiaHead
        <title>LaraProperty</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body class="bg-white dark:bg-stone-950 dark:text-gray-300 font-Bai">
        {{-- <img src="/storage/imgs/a1.jpg" alt="Girl in a jacket" width="50" height="60"> --}}
        @inertia
    </body>
</html>
