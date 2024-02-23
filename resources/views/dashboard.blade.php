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
    <script src="https://storage.ko-fi.com/cdn/scripts/overlay-widget.js"></script>
    <script src="https://kit.fontawesome.com/de6c49022c.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-50 h-screen bg-cover">
    <div class="container h-full mx-auto">
        <!-- Search Input -->
        <section class="overflow-visible flex justify-center dark:bg-[#FF3503]">
            <div class="flex bg-white rounded-full mx-auto mt-5 h-16 shadow-lg justify-between items-center w-11/12">
                <form action="{{ route('pet.search') }}" method="GET" class="flex px-5 w-full text-gray-500 justify-between items-center">
                    <input type="text" name="pet" value="{{ isset($query) ? $query : '' }}" class="w-full h-16 bg-white outline-0 border-none focus:ring-0 focus:ring-transparent focus:border-transparent focus:outline-none rounded-full" placeholder="Cari berdasarkan nama atau kategori">
                    <div class="w-1/4 flex flex-row justify-between items-center">
                        <div class="flex flex-row justify-start gap-5 w-full items-center">
                            <div class="bg-gray-400 w-[1.25px] py-1 h-12 rounded-full"></div>
                            <i class="-mt-[2px] fa-solid fa-location-dot"></i>
                            <a href=""><span class="-ml-2 text-gray-700">Lokasi</span></a>
                        </div>
                        <button type="submit" class="rounded-full bg-[#FF862F] text-white font-medium py-1 px-5 place-items-end hover:bg-gray-100 hover:text-[#FF862F]">Cari</button>
                    </div>
                </form>
            </div>
        </section>

        @if (empty($query))
        <section class="overflow-hidden mt-5 pb-5 lg:pb-[40px] bg-white rounded-xl dark:bg-[#FF3503]">
            <div class="container mx-auto">
                <h2 class="mt-5 mb-2 text-xl lg:text-4xl text-gray-800 dark:text-gray-50 sm:text-[40px]/[48px]">Hewan yang Mungkin Disukai</h2>

                <section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-16 gap-x-10 mt-7
                 mb-5">
                    @foreach($pets as $pet)
                    <!--   ✅ Product card 1 - Starts Here 👇 -->
                    <div class="w-72 bg-white shadow-md rounded-xl transition duration-300 ease-in-out hover:scale-105 hover:shadow-xl">
                        <a href="/pets/{{ $pet->kd }}">
                            <img src="{{ $pet->images[0] }}" alt="Product" class="h-72 w-72 object-cover rounded-xl" />
                            <div class="px-4 py-3 w-72">
                                <span class="text-gray-400 mr-3 uppercase text-xs">{{ $pet->category }}</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">{{ $pet->nama }}</p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">{{ $pet->harga }}</p>
                                    <!-- <del>
                                        <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                    </del> -->
                                    <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--   🛑 Product card 1 - Ends Here  -->
                    @endforeach
                </section>
            </div>
        </section>

        @elseif ($results->isEmpty())
        <div class="flex flex-col p-32 items-center justify-center">
            <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/a60759ad1dabe909c46a817ecbf71878.png" class="w-40 ">
            <p class="text-base font-medium text-black">{{$query}} tidak ditemukan</p>
            <p class="text-base font-normal text-black">Mohon coba kata kunci yang lain atau yang lebih umum</p>
        </div>

        @elseif ($results->isNotEmpty())
        <!-- Result Output -->
        <section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-16 gap-x-10 mt-7 mb-5">
            <!--   ✅ Product card 1 - Starts Here 👇 -->
            <div class="w-72 bg-white shadow-md rounded-xl transition duration-300 ease-in-out hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/93/7b/fd/937bfd6837e91cb0f8c542484bcc902f.jpg" alt="Product" class="h-72 w-72 object-cover rounded-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                            <del>
                                <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 1 - Ends Here  -->

            <!--   ✅ Product card 2 - Starts Here 👇 -->
            <div class="w-72 bg-white shadow-md rounded-xl transition duration-300 hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/73/71/5a/73715a2d1fb32cc5a93b9b9f69da6ccd.jpg" alt="Product" class="h-72 w-72 object-cover rounded-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                            <del>
                                <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 2- Ends Here  -->

            <!--   ✅ Product card 3 - Starts Here 👇 -->
            <div class="w-72 bg-white shadow-md rounded-xl transition duration-300 hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/48/25/dc/4825dcc9e55e7412adc10b99f07ea0ab.jpg" alt="Product" class="h-72 w-72 object-cover rounded-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                            <del>
                                <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 3 - Ends Here  -->

            <!--   ✅ Product card 4 - Starts Here 👇 -->
            <div class="w-72 bg-white shadow-md rounded-xl transition duration-300 hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/6f/0c/7d/6f0c7dd236a49fef3d2c7ad9def7f87c.jpg" alt="Product" class="h-72 w-72 object-cover rounded-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                            <del>
                                <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 4 - Ends Here  -->

            <!--   ✅ Product card 5 - Starts Here 👇 -->
            <div class="w-72 bg-white shadow-md rounded-xl transition duration-300 hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/8b/0b/6e/8b0b6ec260a4c1d2b3e579f96590bb7f.jpg" alt="Product" class="h-72 w-72 object-cover rounded-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                            <del>
                                <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 5 - Ends Here  -->

            <!--   ✅ Product card 6 - Starts Here 👇 -->
            <div class="w-72 bg-white shadow-md rounded-xl transition duration-300 hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://i.pinimg.com/564x/27/f1/9f/27f19fcf670f1da1fba85973fb1afc62.jpg" alt="Product" class="h-72 w-72 object-cover rounded-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                            <del>
                                <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 6 - Ends Here  -->

        </section>
        @endif
    </div>

</body>