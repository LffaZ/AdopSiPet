<aside class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
    <a href="#">
        <img class="w-auto h-7" src="https://merakiui.com/images/logo.svg" alt="">
    </a>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-6 ">
            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">analisa</label>

                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Dashboard</span>
                </a>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Performa</span>
                </a>
            </div>

            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">pengguna</label>

                <!-- NYONTOH FIRST LATIHAN -->
                {{-- <div x-data="{ isActive: false, open: false, currentUrl: window.location.href }">
                    <a href="{{ route('users.index') }}" @click="open = !open;currentUrl = '{{ route('users.index') }}';" class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" :class="{'bg-gray-100 text-gray-700 dark:bg-gray-100 dark:text-gray-200' : currentUrl.includes('users')}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                        <i class="fa-solid fa-user w-5 h-4"></i>

                        <span class="mx-2 text-sm font-medium">Pengguna</span>

                        <span class="ml-auto" aria-hidden="true">
                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180' : open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                        </span>
                    </a>

                    <div role="menu" x-show="currentUrl.includes('users') && open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                        <a href="{{ route('useraddresses.index') }}" role="menuitem" class="block p-2 text-sm text-gray-600 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Alamat
                        </a>
                        <a href="{{ route('favorits.index') }}" role="menuitem" class="block p-2 text-sm text-gray-600 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Favorit
                        </a>
                        <a href="{{ route('searchhistories.index') }}" role="menuitem" class="block p-2 text-sm text-gray-600 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Riwayat Pencarian
                        </a>
                    </div>
                </div> --}}

                <div x-data="{ open: false, currentRoute: window.location.pathname }" 
                @route-change.window="console.log('oaoaoa'); currentRoute = $event.detail.to">
                    <a href="{{ route('users.index') }}" 
                    @click="open = !open" 
                    class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" 
                    :class="{'bg-gray-100 text-gray-700 dark:bg-gray-100 dark:text-gray-200': currentRoute.includes('users')}" role="button" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
                        <i class="fa-solid fa-user w-5 h-4"></i>
                        <span class="mx-2 text-sm font-medium">Pengguna</span>
                        <span class="ml-auto" aria-hidden="true">
                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180' : open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                        </span>
                    </a>

                    <div role="menu" x-show="currentRoute.includes('users') && open" @click.away="open = false" 
                        class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                        <a href="{{ route('useraddresses.index') }}" @click="open = false" role="menuitem" class="block p-2 text-sm text-gray-600 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Alamat
                        </a>
                        <a href="{{ route('favorits.index') }}" @click="open = false" role="menuitem" class="block p-2 text-sm text-gray-600 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Favorit
                        </a>
                        <a href="{{ route('searchhistories.index') }}" @click="open = false" role="menuitem" class="block p-2 text-sm text-gray-600 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Riwayat Pencarian
                        </a>
                    </div>
                </div>


                <div x-data="{ isActive: false, open: false}">
                    <a href="{{ route('petcontributors.index') }}" @click="open = !open" class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" :class="{'bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-200'}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16" width="18" viewBox="0 0 576 512" stroke-width="1.5" stroke="currentColor"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32V448c0 35.3 28.7 64 64 64H448.5c35.5 0 64.2-28.8 64-64.3l-.7-160.2h32zM256 208c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H320v48c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V320H208c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h48V208z" />
                        </svg>

                        <span class="mx-2 text-sm font-medium">Penyedia Hewan</span>

                        <span class="ml-auto" aria-hidden="true">
                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                        </span>
                    </a>

                    <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                        <a href="{{ route('pets.index') }}" role="menuitem" class="block p-2 text-sm text-gray-600 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Hewan
                        </a>
                    </div>
                </div>

                <!-- <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <i class="fa-solid fa-paw w-5 h-4"></i>
                    <span class="mx-2 text-sm font-medium">Hewan</span>
                </a> -->

                <a href="{{ route('adoptions.index') }}" class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" >
                    <i class="fa-solid fa-clipboard w-5 h-4"></i>
                    <span class="mx-2 text-sm font-medium">Track Adopsi Hewan</span>
                </a>

                <!-- <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Hotspots</span>
                </a>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Checklists</span>
                </a> -->
            </div>

            <!-- <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Customization</label>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Dark Mode</span>
                </a>
            </div> -->
        </nav>
    </div>
</aside>