<x-petcontributor-layout>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="mb-5 font-semibold text-3xl lg:text-5xl text-black sm:text-[40px]/[48px]">Selamat datang!</h2>
            <div class="w-full flex flex-row pb-3 items-center">
                <div class="w-1/2 flex flex-col justify-start">
                    <p class="mb-[2px] font-extrabold text-3xl lg:text-2xl text-black sm:text-[40px]/[48px]">Analisis bisnis</p>
                    <p class="mb-3 text-base text-gray-600 ">Berdasarkan data yang diambil pada 7 Februari</p>
                </div>
                <div class="w-1/2 h-full flex flex-row justify-end gap-2">

                    <button id="dropdownRadioHelperButton" data-dropdown-toggle="dropdownRadioHelper" class="border border-gray-300 bg-white text-dark-3 w-1/3 h-full rounded-2xl flex flex-row px-5 py-3 justify-between items-start inline-flex" type="button" x-data="{ isOpen: false }" @click="isOpen = !isOpen">
                        {{ $past7DayRange }}
                        <!-- <svg class="w-2.5 h-2.5 ms-3 transform transition-transform duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg> -->
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
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    @if($showInstructionModal)
    @include('petcontributors.layouts.instruction-modal')
    @endif
</x-petcontributor-layout>