<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portal Pemilik Hewan — {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/css/myown.css', 'resources/js/app.js', 'resources/js/tab-active.js', 'resources/js/chart.js'])
    <script src="https://kit.fontawesome.com/de6c49022c.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans antialiased flex justify-between">
    @include('petcontributor.layouts.sidebar')
    <div class="h-screen w-screen bg-white dark:bg-gray-900">

        {{-- @include('petcontributor.layouts.navigation') --}}

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main {{ $attributes->merge(['class' => '']) }}>
            {{ $slot }}
        </main>
    </div>
</body>

</html>