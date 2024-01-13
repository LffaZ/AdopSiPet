@props([
    'title' => '',
    'active' => false
])


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
        <script src="https://kit.fontawesome.com/de6c49022c.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-slate-100 dark:bg-gray-800 text-gray-900 antialiased">
        <section class="flex justify-between h-screen">
            <div class="flex w-1/2 bg-gray-800 rounded-r-full  -ml-10 text-white items-center items-center justify-center">
                <h1 class="text-5xl -pr-10">
                    {{ $title }}
                </h1>
            </div>
            <div class="w-1/2 sm:max-w-md m-auto px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </section>
    </body>
</html>