<aside class="flex flex-col w-64 h-screen px-5 py-4 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
    <a href="../" class="flex w-full items-center">
        <!-- <img class="w-auto h-7" src="https://merakiui.com/images/logo.svg" alt=""> -->
        <img class="w-auto h-12" src="{{ asset('img/logo/logo-text.png') }}" alt="logo">
    </a>

    <div class="flex flex-col my-7 flex-1">
        <nav class="-mx-3 space-y-6 ">
            <div class="space-y-3 ">
                <a href="{{ route('petcontributor.dashboard') }}" class="flex items-center px-3 py-3 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#FFC296] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <!-- <i class="fa-regular fa-home text-2xl w-7 h-4"></i> -->
                    <img src="{{ asset('icon/home-regular.png') }}" alt="" width="20">
                    <span class="mx-2 text-base font-normal">Beranda</span>
                </a> 

                <!-- <a href="/insight" class="flex items-center px-3 py-3 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#FFC296] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"> -->
                    <!-- <i class="fa-solid fa-arrow-up-right-dots text-2xl w-7 h-4"></i> -->
                    <!-- <img src="{{ asset('icon/increase.png') }}" alt="" width="20">

                    <span class="mx-2 text-base font-normal">Analisa</span>
                </a> -->
                <a href="{{ route('petcontributor.adoptions.index') }}" class="flex items-center px-3 py-3 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#FFC296] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <img src="{{ asset('icon/clipboard-regular.png') }}" alt="" width="20">
                    <!-- <i class="fa-solid fa-clipboard text-2xl w-7 h-4"></i> -->
                    <span class="mx-2 text-base font-normal">Track Adopsi</span>
                </a>
                <!-- <a href="{{ route('petcontributor.feedbacks.index') }}" class="flex items-center px-3 py-3 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#FFC296] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <img src="{{ asset('icon/feedback-regular.png') }}" alt="" width="20"> -->
                    <!-- <i class="fa-regular fa-comments text-2xl w-7 h-4"></i> -->
                    <!-- <span class="mx-2 text-base font-normal">Masukan</span>
                </a> -->
                <a href="{{ route('petcontributor.pets.index') }}" class="flex items-center px-3 py-3 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#FFC296] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <img src="{{ asset('icon/pawprint-regular.png') }}" alt="" width="20">
                    <!-- <i class="fa-solid fa-paw text-2xl w-7 h-4"></i> -->
                    <span class="mx-2 text-base font-normal">Hewan</span>
                </a>
                
                <!-- <a href="/petcontributor/help" class="flex items-center px-3 py-3 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#FFC296] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <img src="{{ asset('icon/question-regular.png') }}" alt="" width="20"> -->
                    <!-- <i class="fa-regular fa-circle-question text-2xl w-7 h-4"></i> -->
                    <!-- <span class="mx-2 text-base font-normal">Pusat Bantuan</span>
                </a> -->
            </div>

        </nav>
    </div>
</aside>