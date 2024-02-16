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
                <div class="flex flex-row max-w-full px-4 w-60">
                    <a href="javascript:void(0)" class="block w-full py-5">
                        <!-- <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg" alt="logo" class="dark:hidden" />
                        <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg" alt="logo" class="hidden dark:block" /> -->
                        <!-- <svg width="57.5" height="65" viewBox="0 0 198 242" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4305 137.122C14.0078 140.41 15.4805 144.174 17.5887 147.604C21.6511 154.212 28.3651 159.325 36.0707 160.22C45.1354 161.273 50.5373 156.3 52.9572 152.537C56.2323 147.444 53.9099 138.717 50.8267 133.771C48.733 130.413 42.5843 125.809 39.5833 124.415C33.5812 121.628 16.1439 119.522 14.4305 137.122Z" fill="#FFC25A" stroke="#FFC25A" stroke-linejoin="round" />
                            <path d="M27.5247 89.7892C26.9491 94.4182 29.0474 101.482 31.7415 106.837C34.0611 111.447 38.1901 114.8 42.8453 117.028C53.7624 122.255 64.0603 122.102 71.2075 111.956C78.7975 101.18 72.0296 90.1598 68.4771 85.4082C62.7994 77.8139 56.7979 74.5191 54.24 73.7199C46.2632 71.2275 29.2229 71.7235 27.5247 89.7892Z" fill="#FFC25A" stroke="#FFC25A" stroke-linejoin="round" />
                            <path d="M83.4228 62.3385C79.2364 67.9721 77.4965 79.7852 79.1219 86.2285C80.5167 91.7577 88.1367 110.832 106.568 104.417C118.577 100.237 120.336 85.269 119.913 78.8679C119.263 69.0435 115.685 64.4205 114.024 61.6306C109.723 54.4055 93.7205 47.5665 83.4228 62.3385Z" fill="#FFC25A" stroke="#FFC25A" stroke-linejoin="round" />
                            <path d="M145.267 67.161C142.234 67.8489 138.945 70.2453 136.067 73.1069C130.546 78.5958 127.209 86.3071 128.011 94.0381C128.971 103.286 134.75 107.399 139.051 108.801C144.848 110.691 153.841 106.658 157.905 102.376C160.665 99.4685 163.894 93.0134 164.764 88.5277C166.127 81.4933 162.899 64.3126 145.267 67.161Z" fill="#FFC25A" stroke="#FFC25A" stroke-linejoin="round" />
                            <path d="M85.6116 185.981C98.8864 177.4 129.222 161.08 144.364 164.453" stroke="#FF862F" stroke-width="10" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M72.5 203C56.5 195.5 52.1667 153.5 72.5 128.5C103 91 177 127.5 170.5 163C166.097 187.049 148.922 184.331 135.366 182.186C129.421 181.245 124.171 180.414 121 182C114.92 185.04 111.578 189.905 108.412 194.515C102.204 203.553 96.6714 211.609 72.5 203ZM91.5017 186.258C88.4491 193.72 86.0017 152.758 98.0017 143.258C110.644 133.249 150.002 159.758 142.502 159.758C125.436 159.758 96.0017 175.258 91.5017 186.258Z" fill="#FFC25A" />
                        </svg> -->
                        <img src="{{ asset('img/logo/logo-text.png') }}" alt="logo">
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

    <!-- ====== Home Section Start -->
    <section class="overflow-hidden pt-10 pb-12 lg:pt-[50px] lg:pb-[90px] bg-white dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between -mx-4">
                <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                    <div class="mt-7 lg:mt-0">
                        <!-- <span class="block mb-4 text-lg font-semibold text-primary">
                            Why Choose Us
                        </span> -->
                        <h2 class="telegraf mb-5 text-8xl lg:text-7xl text-dark dark:text-white sm:text-[40px]/[48px]">
                            Temui sahabatmu berikutnya
                        </h2>
                        <p class="mb-5 text-base text-body-color dark:text-dark-6">
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                            The point of using Lorem Ipsum is that it has a more-or-less.
                        </p>
                        <a href="javascript:void(0)" class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border border-transparent rounded-md px-7 bg-primary hover:bg-opacity-90">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-6/12">
                    <div class="flex items-center -mx-3 sm:-mx-4">
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="py-3 sm:py-4">
                                <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-1.jpg" alt="" class="w-full rounded-2xl" />
                            </div>
                            <div class="py-3 sm:py-4">
                                <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-2.jpg" alt="" class="w-full rounded-2xl" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="relative z-10 my-4">
                                <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-3.jpg" alt="" class="w-full rounded-2xl" />
                                <span class="absolute -right-7 -bottom-7 z-[-1]">
                                    <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="#3056D3" />
                                        <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="#3056D3" />
                                        <circle cx="60.3334" cy="104" r="1.66667" transform="rotate(-90 60.3334 104)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="#3056D3" />
                                        <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="#3056D3" />
                                        <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="#3056D3" />
                                        <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="#3056D3" />
                                        <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="#3056D3" />
                                        <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="#3056D3" />
                                        <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="#3056D3" />
                                        <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="#3056D3" />
                                        <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="#3056D3" />
                                        <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="30.9998" r="1.66667" transform="rotate(-90 60.3333 30.9998)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="30.9998" r="1.66667" transform="rotate(-90 88.6667 30.9998)" fill="#3056D3" />
                                        <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="#3056D3" />
                                        <circle cx="117.667" cy="30.9998" r="1.66667" transform="rotate(-90 117.667 30.9998)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="30.9998" r="1.66667" transform="rotate(-90 74.6667 30.9998)" fill="#3056D3" />
                                        <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="#3056D3" />
                                        <circle cx="103" cy="30.9998" r="1.66667" transform="rotate(-90 103 30.9998)" fill="#3056D3" />
                                        <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="#3056D3" />
                                        <circle cx="132" cy="30.9998" r="1.66667" transform="rotate(-90 132 30.9998)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="16.3333" r="1.66667" transform="rotate(-90 1.66667 16.3333)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="16.3333" r="1.66667" transform="rotate(-90 16.3333 16.3333)" fill="#3056D3" />
                                        <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="#3056D3" />
                                        <circle cx="31" cy="16.3333" r="1.66667" transform="rotate(-90 31 16.3333)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="16.3333" r="1.66667" transform="rotate(-90 45.6667 16.3333)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="16.3333" r="1.66667" transform="rotate(-90 60.3333 16.3333)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="16.3333" r="1.66667" transform="rotate(-90 88.6667 16.3333)" fill="#3056D3" />
                                        <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="#3056D3" />
                                        <circle cx="117.667" cy="16.3333" r="1.66667" transform="rotate(-90 117.667 16.3333)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="16.3333" r="1.66667" transform="rotate(-90 74.6667 16.3333)" fill="#3056D3" />
                                        <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="#3056D3" />
                                        <circle cx="103" cy="16.3333" r="1.66667" transform="rotate(-90 103 16.3333)" fill="#3056D3" />
                                        <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="#3056D3" />
                                        <circle cx="132" cy="16.3333" r="1.66667" transform="rotate(-90 132 16.3333)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="45.3333" r="1.66667" transform="rotate(-90 1.66667 45.3333)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="45.3333" r="1.66667" transform="rotate(-90 16.3333 45.3333)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="#3056D3" />
                                        <circle cx="31" cy="45.3333" r="1.66667" transform="rotate(-90 31 45.3333)" fill="#3056D3" />
                                        <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="45.3333" r="1.66667" transform="rotate(-90 45.6667 45.3333)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="1.66683" r="1.66667" transform="rotate(-90 60.3333 1.66683)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="1.66683" r="1.66667" transform="rotate(-90 88.6667 1.66683)" fill="#3056D3" />
                                        <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="#3056D3" />
                                        <circle cx="117.667" cy="1.66683" r="1.66667" transform="rotate(-90 117.667 1.66683)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="1.66683" r="1.66667" transform="rotate(-90 74.6667 1.66683)" fill="#3056D3" />
                                        <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="#3056D3" />
                                        <circle cx="103" cy="1.66683" r="1.66667" transform="rotate(-90 103 1.66683)" fill="#3056D3" />
                                        <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="#3056D3" />
                                        <circle cx="132" cy="1.66683" r="1.66667" transform="rotate(-90 132 1.66683)" fill="#3056D3" />
                                    </svg>
                                    <!-- svg ini simpen dlu buat gambar2 whahaha -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Home Section End -->

</body>