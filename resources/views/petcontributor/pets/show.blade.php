<x-petcontributor-layout>
    <div class="flex h-screen w-full p-5 flex-row items-center">
        <div class="w-1/3 h-full flex items-center justify-start">
            <div class="absolute z-10 flex justify-between gap-20 top-[12%] flex-row ">
                <a href="{{ route('petcontributor.pets.index') }}" class="rounded-full py-2 px-[13px] bg-gray-100 hover:bg-[#FFE5D2] text-gray-700 dark:bg-dark dark:text-white">
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
                <!-- <div class="rounded-full pt-3 px-3 bg-gray-100 hover:bg-[#FFE5D2] text-gray-700 dark:bg-dark dark:text-white">
                    <i class="fa-regular fa-heart"></i>
                </div> -->
            </div>
            <!-- <img src="{{ asset('storage/petphoto/65d3f6523ea8b_1708389970.jpg') }}" alt="" class="absolute w-fit object-cover"> -->
            @foreach($pet->images as $image)
            <img src="{{ asset('storage/'. $image) }}" alt="" class="w-full aspect-square object-cover shadow-lg rounded-3xl">
            @endforeach
        </div>
        <div x-data="{ activeTab:1 }" class="w-2/3 h-screen flex flex-col px-12 py-7 justify-center items-start">
            <h1 class="text-7xl font-semibold text-gray-800">{{ $pet->nama }}</h1>
            <p class="text-base text-gray-500">{{ $pet->category }} — {{ $pet->stts_kepemilikan }}</p>
            <p class="mt-3 text-2xl text-gray-800 font-bold">Rp{{ number_format($pet->harga, 0, ',', '.') }}</p>
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

            <p x-show="activeTab === 1" class="mt-5 text-lg text-gray-800">{{ $petdetail ? $petdetail->deskripsi : '-' }}</p>

            <div x-show="activeTab === 2" class="w-full flex flex-col gap-4">
                <div class="w-full pt-4 gap-4 flex flex-row">
                    <!-- berat -->
                    <div class="w-2/12 text-center text-gray-800 text-3xl flex flex-col rounded-3xl bg-gray-100 py-2 px-4">
                    <i class="fa-solid fa-weight-scale"></i>
                    <span class="text-2xl pt-3">{{ $petdetail ? $petdetail->berat . ' Kg' : '-' }}</span>
                    </div>
                    <!-- panjang -->
                    <div class="w-2/12 text-center text-gray-800 text-3xl flex flex-col rounded-3xl bg-gray-100 py-2 px-4">
                    <i class="fa-solid fa-ruler-horizontal"></i>
                    <span class="text-2xl pt-3">{{ $petdetail ? $petdetail->panjang . ' Cm' : '-' }}</span>
                    </div>
                    <!-- usia -->
                    <div class="w-2/12 text-center text-gray-800 text-3xl flex flex-col rounded-3xl bg-gray-100 py-2 px-4">
                    <i class="fa-solid fa-calendar-week"></i>
                    <span class="text-2xl pt-3">{{ $petdetail ? $petdetail->usia . ' Bln' : '-' }}</span>
                    </div>
                </div>
                <p class="mt-1 text-lg text-gray-800">Warna: {{ $petdetail ? $petdetail->warna : '-' }}</p>
                <p class="text-lg text-gray-800">Karakter: {{ $petdetail ? $petdetail->karakter : '-' }}</p>
            </div>

            <div x-show="activeTab === 3" class="w-full flex flex-col gap-4">
                <img src="" >
                <p class="mt-1 text-lg text-gray-800">Vaksin: {{ $pethealth->stts_vaksin ? $pethealth->stts_vaksin : '-' }}</p>
                <p class="text-lg text-gray-800">{{ $pethealth->stts_steril === 'steril' ? 'Tersteril.' : 'Tidak tersteril.'}} </p>
                <p class="text-lg text-gray-800">Riwayat penyakit: {{ $pethealth->riwayat_penyakit ? $pethealth->riwayat_penyakit : '-' }}</p>
            </div>
            <div class="flex flex-row mt-3 gap-5">
                <a href="/petcontributor/pets/{{ $pet->kd }}/edit" class="py-2 px-[10px] rounded-full hover:bg-gray-300"><i class="text-primary text-2xl fa-solid fa-pencil"></i></a>
                <a href="/petcontributor/pets/{{ $pet->kd }}/delete" class="py-2 px-3 rounded-full hover:bg-gray-300"><i class="text-danger-600 text-2xl fa-solid fa-trash-can"></i></a>
            </div>
        </div>

    </div>
</x-petcontributor-layout>