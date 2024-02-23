<x-petcontributor-layout class="h-full">

    <div class="py-7 h-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="mb-3 font-semibold text-3xl lg:text-5xl text-black sm:text-[40px]/[48px]">Selamat datang!</h2>
            <div class="w-full flex flex-row pb-3 items-center">
                <div class="w-1/2 flex flex-col justify-start">
                    <p class="mb-[2px] font-extrabold text-3xl lg:text-2xl text-black sm:text-[40px]/[48px]">Analisis bisnis</p>
                    <p class="mb-3 text-base text-gray-600 ">Berdasarkan data yang diambil pada 7 Februari</p>
                </div>
                <div class="w-1/2 h-full flex flex-row justify-end gap-2">

                    <button id="dropdownRadioHelperButton" data-dropdown-toggle="dropdownRadioHelper" class="border border-gray-300 bg-white text-dark-3 w-1/3 h-full rounded-2xl flex flex-row px-5 py-3 justify-between items-start inline-flex" type="button" x-data="{ isOpen: false }" @click="isOpen = !isOpen">
                        {{ $past7DayRange }}
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownRadioHelper" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-3xl shadow w-60 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioHelperButton">
                            <li>
                                <div class="flex p-2 rounded-2xl bg-[#FFF5EE]">
                                    <div class="ms-2 text-base font-normal hover:font-extrabold">
                                        <label for="helper-radio-4" class=" text-[#562400] dark:text-gray-300">
                                            <div>7 hari terakhir</div>
                                            <p id="helper-radio-text-4" class="text-xs font-normal text-[#562400] dark:text-gray-300">{{ $past7DayRange }}</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex p-2 rounded-2xl bg-white ">
                                    <div class="ms-2 text-base font-normal hover:font-extrabold">
                                        <label for="helper-radio-5" class="text-gray-900 dark:text-gray-300">
                                            <div>Minggu lalu</div>
                                            <p id="helper-radio-text-5" class="text-xs text-gray-500 dark:text-gray-300">{{ $lastWeekRange }}</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex p-2 rounded-2xl bg-white">
                                    <div class="ms-2 text-base font-normal hover:font-extrabold">
                                        <label for="helper-radio-6" class="text-gray-900 dark:text-gray-300">
                                            <div>30 hari terakhir</div>
                                            <p id="helper-radio-text-6" class="text-xs text-gray-500 dark:text-gray-300">{{ $past30DayRange }}</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex p-2 rounded-2xl bg-white">
                                    <div class="ms-2 text-base font-normal hover:font-extrabold">
                                        <label for="helper-radio-6" class="text-gray-900 dark:text-gray-300">
                                            <div>Bulan lalu</div>
                                            <p id="helper-radio-text-6" class="text-xs text-gray-500 dark:text-gray-300">{{ $lastMonthRange }}</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex p-2 rounded-2xl bg-white">
                                    <div class="ms-2 text-base font-normal hover:font-extrabold">
                                        <label for="helper-radio-6" class="text-gray-900 dark:text-gray-300">
                                            <div>90 hari lalu</div>
                                            <p id="helper-radio-text-6" class="text-xs text-gray-500 dark:text-gray-300">{{ $past90DayRange }}</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="border border-gray-300 bg-white text-sky-600 hover:text-sky-700 hover:bg-sky-50 w-1/3 h-full rounded-2xl flex flex-row px-5 py-3 justify-between items-start inline-flex">
                        Download
                        <i class="fa-solid fa-download"></i>
                    </div>

                </div>
            </div>
            <div class="flex gap-4 dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <div class="w-2/3 flex flex-col gap-4 h-full">
                    <div class="w-full flex flex-row gap-4">
                        <div class="bg-white border border-gray-200 flex flex-col transition duration-500 shadow-lg hover:shadow-2xl p-3 rounded-xl w-1/2">
                            <p class="text-gray-600 text-base">Total Biaya Adopsi</p>
                            <p class="text-dark text-2xl font-black"> Rp{{ number_format($totalAdopsi, 0, ',', '.') }}</p>
                            <p class="text-gray-600 text-xs">0.00% from previous 7 days</p>
                        </div>
                        <div class="bg-white border border-gray-200 flex flex-col transition duration-500 shadow-lg hover:shadow-2xl p-3 rounded-xl w-1/2">
                            <p class="text-gray-600 text-base">Jumlah Pembatalan</p>
                            <p class="text-dark text-2xl font-black">0.00%</p>
                            <p class="text-gray-600 text-xs">0.00% from previous 7 days</p>
                        </div>
                    </div>
                    <!-- <div class="w-full flex overflow-visible bg-white border border-gray-200 flex-col transition duration-500 shadow-lg hover:shadow-2xl p-3 pb-12 rounded-xl">
                        <h1 class="text-gray-600 text-xl font-thin">Jumlah adopsi</h1>
                        <p>
                        <span class="text-dark text-2xl font-black">0</span>
                            <span class="text-gray-600 text-xs">0.00% from previous 7 days</span>
                        </p>
                        <div id="area-chart" class=""></div>
                    </div> -->

                </div>
                <div class="w-1/3 flex flex-col gap-4 h-full">
                    <!-- <div class="w-full bg-white border border-gray-200 flex flex-col transition duration-500 shadow-lg hover:shadow-2xl p-3 rounded-xl">
                        <p class="text-gray-600 text-base">Hewan Terfavorit</p> -->
                    <!-- <p class="text-dark text-2xl font-black">Rp.0</p> -->
                    <!-- <p class="text-gray-600 text-xs">Lorem ipsum dolor sit amet.</p> -->
                    <!-- </div> -->
                    <!-- <div class="w-full bg-white border border-gray-200 flex flex-col transition duration-500 shadow-lg hover:shadow-2xl p-3 rounded-xl">
                        <p class="text-gray-600 text-base">Jumlah Hewan</p>
                        <p class="text-dark text-2xl font-black">Rp.0</p>
                        <p class="text-gray-600 text-xs">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="w-full bg-white border border-gray-200 flex flex-col transition duration-500 shadow-lg hover:shadow-2xl p-3 rounded-xl">
                        <p class="text-gray-600 text-base">Penilaian Pemilik Hewan</p>
                        <p class="text-dark text-2xl font-black">Rp.0</p>
                        <p class="text-gray-600 text-xs">Lorem ipsum dolor sit amet.</p>
                    </div> -->
                </div>


            </div>
            
        </div>
        <table x-show="activeTab === 1" class="h-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="pt-2 pb-3 px-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Adopsi
                        <!-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"> Jelajahi tabel pengguna yang komprehensif dengan beragam profil, dirancang untuk menyederhanakan alur kerja Anda, meningkatkan produktivitas, memfasilitasi konektivitas, membantu dalam mendapatkan informasi, menjaga keteraturan, dan masih banyak lagi</p> -->
                        <!-- <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-2" /> -->
                        
                    </caption>


                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Kode
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama penyedia hewan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengadopsi hewan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                nama hewan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Lunas?</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
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
                                Rp{{ number_format($adoption->total_nominal, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adoption->tanggal }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                @if($adoption->status == 'pending')
                                <form action="{{ route('petcontributor.adoptions.update', ['id' => $adoption->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="lunas">
                                    <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-3 py-1 rounded-lg bg-slate-300">Lunas</button>
                                </form>
                                @else
                                Lunas
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>

    @if($showInstructionModal)
    @include('petcontributors.layouts.instruction-modal')
    @endif
</x-petcontributor-layout>