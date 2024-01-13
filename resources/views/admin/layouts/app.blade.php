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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-8V+yLuOV5L3IqTbdrPc5kKdXmnn2yS31dEm5ssAZZq86iSffw2Yl72H7m1YV4H5sJHlqeuZxY3nJUuQly+qtzQ==" crossorigin="anonymous" />

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/css/myown.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
	<script src="https://kit.fontawesome.com/de6c49022c.js" crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased flex justify-between">
    @include('admin.layouts.sidebar')
    <div class="min-h-screen w-screen bg-gray-100 dark:bg-gray-900">

        @include('admin.layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

</body>

</html>