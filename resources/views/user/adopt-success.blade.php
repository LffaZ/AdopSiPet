<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopsi Berhasil - Pembayaran akan Dilakukan</title>
    @vite(['resources/css/app.css','resources/css/myown.css', 'resources/js/app.js', 'resources/js/tab-active.js', 'resources/js/chart.js'])

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">Adopsi Berhasil!</h1>
            <p class="text-lg text-gray-600 mb-8">Pembayaran akan dilakukan di {{ $petcontributor->alamat }}.</p>
            <a href="/" class="inline-block bg-[#FF862F] text-white px-6 py-3 rounded-lg shadow-md transition duration-300 ease-in-out hover:bg-[#E85D04]">Kembali</a>
        </div>
    </div>
</body>

</html>
