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
    <div class="flex h-screen w-full p-5 flex-row items-center">
        <div class="w-1/3 h-full flex items-center justify-center">
            <div class="absolute z-10 flex justify-between gap-36 top-[12%] flex-row ">
                <a href="/" class="rounded-full py-[10px] px-[15px] bg-gray-100 hover:bg-[#FFE5D2] text-gray-700 dark:bg-dark dark:text-white">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
                <!-- Lokasi -->
                <!-- <div class="flex flex-row ">
                        <div class="rounded-full bg-gray-100  text-gray-700 dark:bg-dark dark:text-white">
                            <i class="fa-solid pt-3 px-[14px] text-lg fa-location-dot"></i>
                        </div>
                        <div class="-ml-1 rounded-full px-3 py-2 text-lg bg-gray-100  text-gray-700 dark:bg-dark dark:text-white">Surabaya</div>
                    </div> -->
                <!-- Favorit -->
                @if (auth()->check())
                <!-- <a href="{{ route('login') }}" class="rounded-full py-[10px] px-3 bg-gray-100 hover:bg-[#FFE5D2] text-gray-700 dark:bg-dark dark:text-white">
                    <i class="fa-regular fa-heart"></i>
                </a> -->
                @else
                <a href="{{ route('login') }}" class="rounded-full py-[10px] px-3 bg-gray-100 hover:bg-[#FFE5D2] text-gray-700 dark:bg-dark dark:text-white">
                    <i class="fa-regular fa-heart"></i>
                </a>
                @endif
            </div>
            <!-- <img src="{{ asset('storage/petphoto/65d3f6523ea8b_1708389970.jpg') }}" alt="" class="absolute w-fit object-cover"> -->
            {{-- @if(count($pet->images) > 0) --}}
            <img src="{{ asset('/storage/'. $pet->images[0]) }}" alt="" class="w-full aspect-square object-cover shadow-lg rounded-3xl">
            {{-- @else --}}
            <!-- <img src="{{ asset('storage/petphoto/null-petphoto.jpg') }}" alt="" class="w-full aspect-square object-cover shadow-lg rounded-3xl"> -->
            {{-- @endif --}}
        </div>
        <div x-data="{ activeTab:1 }" class="w-2/3 h-screen flex flex-col px-12 py-7 justify-center items-start">
            <h1 class="text-7xl font-semibold text-gray-800">{{ $pet->nama }}</h1>
            <p class="text-base text-gray-500">{{ $pet->category }} — {{ $pet->stts_kepemilikan }}</p>
            <p class="mt-3 text-2xl text-gray-800 font-bold">Rp. {{ number_format($pet->harga, 0, ',', '.') }}</p>
            <div class="border-b bg-white w-full border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-400 dark:text-gray-400">
                    <li class="me-2">
                        <a x-on:click="activeTab = 1" x-bind:class="{'text-[#ff6c03] border-b-2 border-[#ff6c03]': activeTab === 1,'hover:text-gray-500 hover:border-b-2 hover:border-gray-200 dark:hover:text-gray-300': activeTab !== 1}" class="inline-flex text-lg items-center justify-center p-4 rounded-t-lg group" aria-current="page">
                            Deskripsi
                        </a>
                    </li>
                    <li class="me-2">
                        <a x-on:click="activeTab = 2" x-bind:class="{'text-[#ff6c03] border-b-2 border-[#ff6c03]': activeTab === 2,'hover:text-gray-500 hover:border-b-2 hover:border-gray-200 dark:hover:text-gray-300': activeTab !== 2}" class="inline-flex text-lg items-center justify-center p-4 rounded-t-lg group">
                            Detail
                        </a>
                    </li>
                    <li class="me-2">
                        <a x-on:click="activeTab = 3" x-bind:class="{'text-[#ff6c03] border-b-2 border-[#ff6c03]': activeTab === 3,'hover:text-gray-500 hover:border-b-2 hover:border-gray-200 dark:hover:text-gray-300': activeTab !== 3}" class="inline-flex text-lg items-center justify-center p-4 rounded-t-lg group">
                            Kesehatan
                        </a>
                    </li>
                </ul>
            </div>

            <p x-show="activeTab === 1" class="mt-5 text-lg text-gray-800">{{ $petdetail->deskripsi ? $petdetail->deskripsi : '-' }}</p>

            <div x-show="activeTab === 2" class="w-full flex flex-col gap-4">
                <div class="w-full pt-4 gap-4 flex flex-row">
                    <!-- berat -->
                    <div class="w-2/12 text-center text-gray-800 text-3xl flex flex-col rounded-3xl bg-gray-100 py-2 px-4">
                        <i class="fa-solid fa-weight-scale"></i>
                        <span class="text-2xl pt-3">{{ $petdetail->berat ? $petdetail->berat . ' Kg' : '-' }}</span>
                    </div>
                    <!-- panjang -->
                    <div class="w-2/12 text-center text-gray-800 text-3xl flex flex-col rounded-3xl bg-gray-100 py-2 px-4">
                        <i class="fa-solid fa-ruler-horizontal"></i>
                        <span class="text-2xl pt-3">{{ $petdetail->panjang ? $petdetail->panjang . ' Cm' : '-' }}</span>
                    </div>
                    <!-- usia -->
                    <div class="w-2/12 text-center text-gray-800 text-3xl flex flex-col rounded-3xl bg-gray-100 py-2 px-4">
                        <i class="fa-solid fa-calendar-week"></i>
                        <span class="text-2xl pt-3">{{ $petdetail->usia ? $petdetail->usia . ' Bln' : '-' }}</span>
                    </div>
                </div>
                <p class="mt-1 text-lg text-gray-800">Warna: {{ $petdetail->warna ? $petdetail->warna : '-' }}</p>
                <p class="text-lg text-gray-800">Karakter: {{ $petdetail->karakter ? $petdetail->karakter : '-' }}</p>
            </div>
            <div x-show="activeTab === 3" class="w-full flex flex-col gap-4">
                <img src="">
                <p class="mt-1 text-lg text-gray-800">Vaksin: {{ $pethealth->stts_vaksin ? $pethealth->stts_vaksin : '-' }}</p>
                <p class="text-lg text-gray-800">{{ $pethealth->stts_steril === 'steril' ? 'Tersteril.' : 'Tidak tersteril.'}} </p>
                <p class="text-lg text-gray-800">Riwayat penyakit: {{ $pethealth->riwayat_penyakit ? $pethealth->riwayat_penyakit : '-' }}</p>
            </div>
            <div class="flex flex-row mt-3 gap-5">
                <!-- <div class="py-2 px-5 rounded-lg text-lg text-semibold bg-[#FFCBA5] hover:bg-[#FF862F] hover:text-white"">Adopsi</div> -->

                <div x-data="{ showModal: false }">
                    <!-- Button untuk memunculkan modal -->
                    <button @click="showModal = true" class="py-2 px-5 rounded-lg text-lg text-semibold bg-[#FFCBA5] hover:bg-[#FF862F] hover:text-white">Adopsi</button>

                    <!-- Modal -->
                    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                            <!-- Latar belakang modal -->
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                            <!-- Bagian modal -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                            <!-- Konten modal -->
                            <div x-show="showModal" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <!-- Isi konten modal -->
                                    <div class="sm:flex sm:items-start">
                                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <!-- Icon -->
                                            <!-- Heroicon name: outline/check -->
                                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                                Konfirmasi Adopsi
                                            </h3>
                                            <div class="mt-2">
                                                <p class="text-sm text-gray-500">
                                                    Apakah Anda yakin ingin mengadopsi hewan ini?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <form action="/adoptions/store" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $pet->id_petcontributor }}" name="id_penyedia">
                                    <input type="hidden" value="{{ $pet->harga }}" name="total_nominal">
                                    <input type="hidden" value="{{ $pet->kd }}" name="kd_pet">
                                    <!-- Tombol konfirmasi -->
                                    <button @click="showModal = false" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#FF862F] text-base font-medium text-white hover:bg-[#E85D04] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF862F] sm:ml-3 sm:w-auto sm:text-sm">
                                        Adopsi
                                    </button>
                                    </form>
                                    <!-- Tombol batal -->
                                    <button @click="showModal = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF862F] sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Batal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>