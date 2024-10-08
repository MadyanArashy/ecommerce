<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="bg-gray-100 dark:bg-gray-900 flex flex-col-reverse lg:grid lg:grid-cols-2 lg:px-96 sm:justify-between items-center pt-6 sm:pt-0 gap-12 mx-auto max-w-screen min-h-screen">
    <div>
        <img src="{{ url('Shopping bag-bro.png') }}" class="object-scale-down">
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg lg:mt-0">
        {{ $slot }}
    </div>
        </div>
    </body>
</html>
