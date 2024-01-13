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
    <!-- ====== Navbar Section Start -->
    <header x-data="{navbarOpen: false}" class="flex items-center w-full bg-white dark:bg-dark">
        <div class="container mx-auto">
            <div class="relative flex items-center justify-between -mx-4">
                <div class="max-w-full px-4 w-60">
                    <a href="javascript:void(0)" class="block w-full py-5">
                        <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg" alt="logo" class="dark:hidden" />
                        <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg" alt="logo" class="hidden dark:block" />
                    </a>
                </div>
                <div class="flex items-center justify-between w-full px-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                        </button>
                        <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent">
                            <ul class="block lg:flex">
                                <li>
                                    <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white">
                                        Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white">
                                        Features
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    @if (Route::has('login'))
                    <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                        <i class="py-4 fa-solid moon fa-moon text-body-color dark:text-white cursor-pointer hover:text-primary"></i>
                        <i class="py-4 fa-solid sun fa-sun text-body-color dark:text-white cursor-pointer hover:text-primary"></i>
                        @auth
                        <a href="{{ url('/dashboard') }}" class="py-3 text-base px-7 font-medium text-body-color dark:text-white hover:text-primary">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="py-3 text-base px-7 font-medium text-body-color dark:text-white hover:text-primary">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="py-3 text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-primary/90">Sign up</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Navbar Section End -->

</body>