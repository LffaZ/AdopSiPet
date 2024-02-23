<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/css/myown.css', 'resources/js/theme.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdopSi Pet - Cari teman rumahmu disini!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://storage.ko-fi.com/cdn/scripts/overlay-widget.js"></script>
    <script src="https://kit.fontawesome.com/de6c49022c.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="overflow-hidden pt-5 pb-5 lg:pt-[15px] lg:pb-[40px] bg-gray-50">
        <div class="container mx-auto">
            <h2 class="mt-5 mb-2 text-3xl lg:text-4xl text-gray-800 dark:text-gray-50 sm:text-[40px]/[48px]">Adopsi hewan bebas biaya</h2>
        
            <section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-16 gap-x-10 mt-10 mb-5">
                @foreach($pets as $pet)
                <div class="w-full bg-white p-5 shadow-md border-white rounded-xl transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl ">
                    <!-- <a href="/pets/{{ $pet->kd }}"> -->
                    <a href="{{ route('pets.show', ['kd' => $pet->kd]) }}">
                        <img src="{{ asset('storage/' . $pet->images[0]) }}" alt="Product" class="h-[252px] w-[252px] mb-[18px] object-cover rounded-xl" />
                        <div class="w-full">
                            <span class="text-gray-400 mr-3 uppercase text-xs">{{ config('pet_categories.' . $pet->category) }}</span>
                            <p class="text-lg font-bold text-black truncate block capitalize">{{ $pet->nama }}</p>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">Rp{{ number_format($pet->harga, 0, ',', '.') }}</p>
                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </section>
        </div>
    </section>



</body>