<x-admin-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"> 
            {{-- {{ __('Dashboard Admin') }} --}}
        </h2>
    </x-slot> -->

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> -->
    {{-- {{ __("You're logged in!") }} --}}
    <!-- </div>
            </div>
        </div>
    </div> -->

    <section class="flex flex-col p-5">
        <div class="w-full flex flex-row gap-7">
            <a href="{{ route('adoptions.index') }}" class="bg-white dark:bg-gray-800 flex flex-col shadow-md hover:shadow-xl p-3 gap-3 rounded-lg w-1/3">
                <p class="text-black dark:text-gray-200 text-base font-medium">Jumlah adopsi</p>
                <p class="text-black dark:text-gray-200 text-2xl font-bold ">{{ $totalAdopsi }}</p>
                <!-- <p class="text-black dark:text-gray-200 text-sm">Lorem ipsum dolor sit amet.</p> -->
            </a>
            <a href="{{ route('petcontributors.index') }}" class="bg-white dark:bg-gray-800 flex flex-col shadow-md hover:shadow-xl p-3 gap-3 rounded-lg w-1/3">
                <p class="text-black dark:text-gray-200 text-base font-medium">Penyedia hewan</p>
                <p class="text-black dark:text-gray-200 text-2xl font-bold ">{{ $totalPenyedia }}</p>
                <!-- <p class="text-black dark:text-gray-200 text-sm">Lorem ipsum dolor sit amet.</p> -->
            </a>
            <a href="{{ route('users.index') }}" class="bg-white dark:bg-gray-800 flex flex-col shadow-md hover:shadow-xl p-3 gap-3 rounded-lg w-1/3">
                <p class="text-black dark:text-gray-200 text-base font-medium">Pengguna</p>
                <p class="text-black dark:text-gray-200 text-2xl font-bold ">{{ $totalPengguna }}</p>
                <!-- <p class="text-black dark:text-gray-200 text-sm">Lorem ipsum dolor sit amet.</p> -->
            </a>
        </div>

        <table class="h-auto w-full text-sm mt-4 rounded-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 pb-2 text-lg rounded-tl-lg rounded-tr-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <div class="w-full flex justify-between">
                    <span>Track Adopsi Hewan</span>
                    <a href="{{ route('adoptions.index') }}"><span class="font-thin text-xs text-gray-600">Lihat semua »</span></a>
                </div>
                <!-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"> Jelajahi tabel pengguna yang komprehensif dengan beragam profil, dirancang untuk menyederhanakan alur kerja Anda, meningkatkan produktivitas, memfasilitasi konektivitas, membantu dalam mendapatkan informasi, menjaga keteraturan, dan masih banyak lagi</p> -->
                <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-2" />

            </caption>


            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Id
                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Penyedia Hewan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Pengadopsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Hewan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Adopsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <!-- <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th> -->
                </tr>
            </thead>
            <tbody class="rounded-br-lg rounded-bl-lg">
                @foreach($adoptions as $adoption)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $adoption->id }}
                    </th>
                    <th scope="row" class="px-6 py-4">
                        {{ $adoption->petcontributor->nama }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $adoption->user->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $adoption->pet->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{-- {{ \Carbon\Carbon::parse($adoption->tanggal)->formatLocalized('%e %B %Y') }} --}}
                        {{$adoption->tanggal}}
                    </td>
                    <td class="px-6 py-4">
                        Rp{{ number_format($adoption->total_nominal, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $adoption->status }}
                    </td>
                    <!-- <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</x-admin-layout>