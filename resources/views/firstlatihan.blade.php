<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/css/myown.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdopSi Pet - Cari teman rumahmu disini!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/de6c49022c.js" crossorigin="anonymous"></script>
</head>

<body class="dark:pt-0.75">
    <div class="bg-blurry-orange">
        <!-- ====== Navbar Section Start -->
        <header x-data="{navbarOpen: false}" class="flex items-center w-full">
            <div class="container mx-auto">
                <div class="relative flex items-center justify-between -mx-4">
                    <div class="flex flex-row max-w-full px-4 w-60">
                        <a href="/" class="block w-full py-5">
                            <!-- <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg" alt="logo" class="dark:hidden" />
                                <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg" alt="logo" class="hidden dark:block" /> -->
                            <img src="{{ asset('img/logo/logo-text.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="flex items-center justify-between w-full px-4">
                        <div>
                            <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            </button>
                            <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[250px] rounded-lg py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent">
                                <ul class="block lg:flex">
                                    <li>
                                        <a href="/" class="flex py-2 text-base font-medium text-body-color lg:ml-12 lg:inline-flex hover:text-white">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/" class="flex py-2 text-base font-medium text-body-color lg:ml-12 lg:inline-flex hover:text-white">
                                            Payment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/" class="flex py-2 text-base font-medium text-body-color lg:ml-12 lg:inline-flex hover:text-white">
                                            Features
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        @if (Route::has('login'))
                        <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                            <i class="py-4 fa-solid moon fa-moon text-body-color dark:text-white cursor-pointer hover:text-[#FF862F]"></i>
                            <i class="py-4 fa-solid sun fa-sun text-body-color dark:text-[#FF862F] cursor-pointer hover:text-[#FF862F]"></i>
                            @auth
                            <a href="{{ url('/dashboard') }}" class="py-3 text-base px-7 font-medium text-body-color hover:text-[#FF862F]">Beranda</a>
                            @else
                            <a href="{{ route('login') }}" class="py-3 text-base px-7 font-medium text-body-color hover:text-[#FF862F]">Masuk</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="py-3 text-base font-medium text-white rounded-full bg-[#FF862F] px-4 hover:bg-white hover:text-[#FF862F] focus:border-2 focus:text-[#FF862F] focus:bg-transparent focus:border-[#FFC25A]">Daftar</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </header>
        <!-- ====== Navbar Section End -->

        <!-- ====== Home Section Start -->
        <section class="overflow-hidden pt-5 pb-5 lg:pt-[15px] lg:pb-[40px]">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center justify-between -mx-4">
                    <div class="w-full px-4 xl:w-3/6 lg:w-3/4">
                        <div class="mt-7 lg:mt-0">
                            <h2 class="telegraf mb-5 text-8xl lg:text-7xl text-[#ff6c03] sm:text-[40px]/[48px]">
                                Temui sahabat barumu
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ====== Home Section End -->
    </div>
    <!-- <div class="flex bg-white rounded-full mx-20 h-16 -mt-7 shadow-lg justify-between items-center">
        <div class="flex px-5 w-full text-gray-500 justify-between items-center">
            <form action="{{ route('pet.search') }}" method="GET">
                <input type="text" name="pet" class="w-3/4 h-16 bg-white outline-0 border-none focus:ring-0 focus:border-transparent focus:outline-none rounded-full" placeholder="Cari berdasarkan nama atau kategori">
                <div class="w-1/4 flex flex-row justify-between items-center">
                    <div class="flex flex-row justify-start gap-5 w-full items-center">
                        <div class="bg-gray-400 w-[1.25px] py-1 h-12 rounded-full"></div>
                        <i class="-mt-[2px] fa-solid fa-location-dot"></i>
                        <a href=""><span class="-ml-2 text-gray-700">Lokasi</span></a>
                    </div>
                    <a class="rounded-full bg-green text-dark py-1 px-5 place-items-end"><button type="submit">Cari</button></a>
                </div>
            </form>
        </div>
    </div> -->

    <!-- Search Input -->
    <section class="overflow-visible flex justify-center -mt-7 bg-gray-600">
        <div class="flex bg-white rounded-full mx-auto h-16 -mt-7 shadow-lg justify-between items-center w-11/12">
            <form action="{{ route('pet.search') }}" method="GET" class="flex px-5 w-full text-gray-500 justify-between items-center">
                <input type="text" name="pet" class="w-full h-16 bg-white outline-0 border-none focus:ring-0 focus:ring-transparent focus:border-transparent focus:outline-none rounded-full" placeholder="Cari berdasarkan nama atau kategori">
                <div class="w-1/4 flex flex-row justify-between items-center">
                    <div class="flex flex-row justify-start gap-5 w-full items-center">
                        <div class="bg-gray-400 w-[1.25px] py-1 h-12 rounded-full"></div>
                        <i class="-mt-[2px] fa-solid fa-location-dot"></i>
                        <a href=""><span class="-ml-2 text-gray-700">Lokasi</span></a>
                    </div>
                    <button type="submit" class="rounded-full bg-green text-dark py-1 px-5 place-items-end">Cari</button>
                </div>
            </form>
        </div>
    </section>

    <section class="overflow-hidden pt-5 pb-5 lg:pt-[15px] lg:pb-[40px] bg-white dark:bg-gray-600">
        <div class="container mx-auto">
            <h2 class="my-5 text-3xl lg:text-4xl text-gray-800 sm:text-[40px]/[48px]">Populer</h2>
        </div>
    </section>

</body>