<x-petcontributor-layout>
    <div class="flex items-center py-7">
        <div class="max-w-7xl mx-auto w-2/3 sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="h-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="p-5 pb-2 mb-2 text-xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Daftar Hewan
                        <!-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"> Jelajahi tabel pengguna yang komprehensif dengan beragam profil, dirancang untuk menyederhanakan alur kerja Anda, meningkatkan produktivitas, memfasilitasi konektivitas, membantu dalam mendapatkan informasi, menjaga keteraturan, dan masih banyak lagi</p> -->
                        <!-- <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-2" /> -->
                        <div class="flex justify-between">
                            <div class=" bg-white dark:bg-gray-800">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative mt-1">
                                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                </div>
                            </div>

                            <div>
                                <!-- <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Tambah Pengguna</button> -->
                                <a href="{{ route('petcontributor.pets.create') }}">
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 hover:ring-sky-700 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Tambah baru
                                    </button>
                                </a>
                                <a href="/">
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Ekspor
                                    </button>
                                </a>
                            </div>
                        </div>
                    </caption>


                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <!-- <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Kode
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th> -->
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status Kepemilikan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <!-- <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pet->kd }}
                            </th> -->
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pet->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $pet->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pet->stts_kepemilikan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pet->harga }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pet->id_petcontributor }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Paginating -->
                {{ $pets->links() }}
            </div>
        </div>
    </div>
</x-petcontributor-layout>