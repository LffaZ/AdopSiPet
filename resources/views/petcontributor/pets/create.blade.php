<x-petcontributor-layout>
    <div x-data="{ activeTab:1 }" class="flex flex-col px-5 justify-center items-center h-screen">
        <div class="flex flex-row justify-center gap-2 w-full h-[10px]">
            <a x-bind:class="{'bg-[#ff6c03] rounded-full w-6 h-2': activeTab === 1,'bg-[#ffc296] rounded-full w-6 h-2': activeTab !== 1}">
            </a>
            <a x-bind:class="{'bg-[#ff6c03] rounded-full w-6 h-2': activeTab === 2,'bg-[#ffc296] rounded-full w-6 h-2': activeTab !== 2}">
            </a>
            <a x-bind:class="{'bg-[#ff6c03] rounded-full w-6 h-2': activeTab === 3,'bg-[#ffc296] rounded-full w-6 h-2': activeTab !== 3}">
            </a>
        </div>

        <div x-show="{{ Route::currentRouteName() }} === ('petcontributor.pets.create')" class="flex flex-row-reverse w-full mt-5 ">
            @yield('pet')
        </div>
        <div x-show="activeTab === 2" class="flex flex-row w-full mt-5 ">
            @yield('petdetail')
        </div>
        <div x-show="activeTab === 3" class="flex flex-col w-full mt-1 justify-center items-center">
            @yield('pethealth')
        </div>
    </div>
</x-petcontributor-layout>