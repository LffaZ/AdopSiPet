<x-petcontributor-layout>
    <div class="flex items-center py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div x-data="{ activeTab:1 }" class="relative overflow-x-auto shadow-md sm:rounded-lg">

                <!-- Tab Status Adopsi -->
                <div class="border-b bg-white border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="me-2">
                        <a x-on:click="activeTab = 1" 
                            x-bind:class="{'text-[#ff6c03] border-b-2 border-[#ff6c03]': activeTab === 1,'hover:text-gray-600 hover:border-b-2 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 1}" 
                            class="inline-flex items-center justify-center p-4 rounded-t-lg group" aria-current="page">
                                <!-- <svg class="w-4 h-4 me-2 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                </svg> -->
                                <i class="fa-solid pr-2 fa-arrows-spin"></i>
                                Sedang Disiapkan
                            </a>
                        </li>
                        <li class="me-2">
                            <!-- <a  x-on:click="activeTab = 2" 
                            x-bind:class="{ 'text-[#ff6c03] border-[#ff6c03]': activeTab === 2, 'hover:text-gray-600 hover:border-b-2 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 2 }" 
                            x-bind:style="{ borderBottomColor: activeTab === 2 ? '#ff6c03' : 'transparent' }" 
                            class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg group">
                                <i class="fa-solid pr-2 fa-circle-check"></i>
                                Siap
                            </a> -->
                            <a x-on:click="activeTab = 2" 
                            x-bind:class="{'text-[#ff6c03] border-b-2 border-[#ff6c03]': activeTab === 2,'hover:text-gray-600 hover:border-b-2 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 2}" 
                            class="inline-flex items-center justify-center p-4 rounded-t-lg group">
                                <i class="fa-solid pr-2 fa-circle-check"></i>
                                Siap
                            </a>
                        </li>
                        <li class="me-2">
                            <a x-on:click="activeTab = 3" 
                            x-bind:class="{'text-[#ff6c03] border-b-2 border-[#ff6c03]': activeTab === 3,'hover:text-gray-600 hover:border-b-2 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 3}" 
                            class="inline-flex items-center justify-center p-4 rounded-t-lg group">
                                <!-- <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                </svg> -->
                                <i class="fa-solid pr-2 fa-truck-ramp-box"></i>
                                Diantar
                            </a>
                        </li>
                        <li class="me-2">
                            <a x-on:click="activeTab = 4" 
                            x-bind:class="{'text-[#ff6c03] border-b-2 border-[#ff6c03]': activeTab === 4,'hover:text-gray-600 hover:border-b-2 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 4}" 
                            class="inline-flex items-center justify-center p-4 rounded-t-lg group">
                                <!-- <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                </svg> -->
                                <i class="fa-solid pr-2 fa-clock-rotate-left"></i>
                                Riwayat
                            </a>
                        </li>
                        <!-- <li>
                            <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
                        </li> -->
                    </ul>
                </div>

                <table x-show="activeTab === 1" class="h-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="pt-2 pb-3 px-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Adopsi
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
                                <a href=" {{ route('admin.dashboard') }}">
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Ekspor
                                    </button>
                                </a>
                            </div>
                        </div>
                    </caption>


                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Kode Adopsi
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Hewan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengadopsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hewan siap?
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adoptions as $adoption)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $adoption->kd }}
                            </th>
                            <th scope="row" class="px-6 py-4">
                                {{ $adoption->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $adoption->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->stts_kepemilikan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->harga }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->id_petcontributor }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <table x-show="activeTab === 2" class="h-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="pt-2 pb-3 px-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Adopsi yang apalah
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
                                <a href=" {{ route('admin.dashboard') }}">
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Ekspor
                                    </button>
                                </a>
                            </div>
                        </div>
                    </caption>


                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Kode Adopsi
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Hewan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengadopsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hewan siap?
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adoptions as $adoption)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $adoption->kd }}
                            </th>
                            <th scope="row" class="px-6 py-4">
                                {{ $adoption->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $adoption->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->stts_kepemilikan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->harga }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->id_petcontributor }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <table x-show="activeTab === 3" class="h-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="pt-2 pb-3 px-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Adopsi yg apalah 2
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
                                <a href=" {{ route('admin.dashboard') }}">
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Ekspor
                                    </button>
                                </a>
                            </div>
                        </div>
                    </caption>


                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Kode Adopsi
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Hewan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengadopsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hewan siap?
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adoptions as $adoption)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $adoption->kd }}
                            </th>
                            <th scope="row" class="px-6 py-4">
                                {{ $adoption->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $adoption->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->stts_kepemilikan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->harga }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->id_petcontributor }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <table x-show="activeTab === 4" class="h-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="pt-2 pb-3 px-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Riwayat Adopsi
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
                                <a href=" {{ route('admin.dashboard') }}">
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Ekspor
                                    </button>
                                </a>
                            </div>
                        </div>
                    </caption>


                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Kode Adopsi
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Hewan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengadopsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hewan siap?
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adoptions as $adoption)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $adoption->kd }}
                            </th>
                            <th scope="row" class="px-6 py-4">
                                {{ $adoption->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $adoption->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->stts_kepemilikan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->harga }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->id_petcontributor }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Paginating -->
                {{ $adoptions->links() }}
            </div>
        </div>
    </div>
</x-petcontributor-layout>