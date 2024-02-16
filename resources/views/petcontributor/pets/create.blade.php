<x-petcontributor-layout>
    <div x-data="{ activeTab:1 }" class="flex flex-col px-5 justify-center items-center h-screen">
        <div class="flex flex-row justify-center gap-2 w-full h-[10px]">
            <a x-on:click="activeTab = 1" x-bind:class="{'bg-[#ff6c03] rounded-full w-6 h-2': activeTab === 1,'bg-[#ffc296] rounded-full w-6 h-2': activeTab !== 1}" aria-current="page">
                <!-- <div class=" rounded-full w-6 h-2"></div> -->
            </a>
            <a x-on:click="activeTab = 2" x-bind:class="{'bg-[#ff6c03] rounded-full w-6 h-2': activeTab === 2,'bg-[#ffc296] rounded-full w-6 h-2': activeTab !== 2}">
                <!-- <div class="rounded-full w-6 h-2"></div> -->
            </a>
            <a x-on:click="activeTab = 3" x-bind:class="{'bg-[#ff6c03] rounded-full w-6 h-2': activeTab === 3,'bg-[#ffc296] rounded-full w-6 h-2': activeTab !== 3}">
                <!-- <div class=" rounded-full w-6 h-2"></div> -->
            </a>
        </div>
        <!-- <label for="input-file" id="drop-area" class="w-full h-full"> -->
        <!-- <input type="file" accept="image/*" id="input-file" hidden>

            <div id="img-view" class="m-5 w-1/2 h-3/4 rounded-3xl border-2 border-gray-600 border-dashed bg-gray-200 text-gray-800 flex flex-col items-center justify-center">
                <i class="text-6xl fa-solid fa-image pb-5"></i>
                <p class="text-xl text-gray-600">TAMBAH FOTO</p>
            </div> -->
        <!-- </label> -->

        <div x-show="activeTab === 1" class="flex flex-row w-full mt-5 ">
            <form id="form-pet-photo" method="POST" action="{{ route('petcontributor.petphotos.store') }}" class="w-2/3 h-full p-[30px] bg-white text-center rounded-[20px]">
                @csrf
                <label for="input-file" id="drop-area" class="w-full">
                    <input type="file" accept="image/*" id="input-file" hidden>
                    <div id="img-view" class="w-full h-full bg-cover bg-center max-w-full rounded-[20px] border-2 border-dashed border-[#bbb5ff] bg-[#f7f8ff] flex flex-col items-center justify-center">
                        <!-- <img id="cropper-image" src="" alt="Uploaded Image" style="display: none;"> -->
                        <i class="text-6xl fa-solid fa-image w-[100px]"></i>
                        <p class="mt-[15px]">Tarik dan lepas atau klik disini<br>untuk unggah foto hewan</p>
                        <!-- <span class="block text-[12px] text-[#777] mt-[15px]">Upload any images from desktop </span> -->
                    </div>
                </label>
            </form>

            <!-- <div class="flex items-center justify-center w-1/2">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div> -->

            <div class="p-5 w-1/2">
                <form id="form-pet" method="POST" action="{{ route('petcontributor.pets.store') }}" class="max-w-sm mx-auto">
                    @csrf
                    <div class="mb-5">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Nama hewan" required>
                    </div>
                    <div class="mb-5">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select class="border-gray-300 text-sm text-gray-900 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="jenkel" type="jenkel" name="jenkel" required="required">
                            <option value="cat">Kucing</option>
                            <option value="dog">Anjing</option>
                            <option value="rabbit">Kelinci</option>
                            <option value="hamster">Hamster</option>
                            <option value="bird">Burung</option>
                            <option value="fish">Ikan</option>
                            <option value="others">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-5 flex flex-col">
                        <!-- <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Kepemilikan</label>
                        <select class="border-gray-300 text-sm text-gray-900 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="jenkel" type="jenkel" name="jenkel" required="required">
                            <option value="pribadi">Pribadi</option>
                            <option value="liar">Liar</option>
                        </select> -->
                        <label for="stts_kepemilikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Kepemilikan</label>
                        <div class="flex mt-1 gap-3">
                            <div class="flex items-center">
                                <input id="stts_kepemilikan" type="radio" name="stts_kepemilikan" value="liar" class="w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="stts_kepemilikan" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Liar</label>
                            </div>
                            <div class="flex items-center">
                                <input id="stts_kepemilikan" type="radio" name="stts_kepemilikan" value="pribadi" class="w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="stts_kepemilikan" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pribadi</label>
                            </div>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-white border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <!-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                </svg> -->
                                Rp
                            </span>
                            <input type="text" id="hargapet" class="rounded-none rounded-e-lg bg-white border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                        </div>
                    </div>
                    <div x-on:click="activeTab = 2" class="text-white bg-[#ff6c03] hover:bg-[#e77728] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Selanjutnya</div>
                </form>
            </div>
        </div>
        <div x-show="activeTab === 2" class="flex flex-row w-full mt-5 ">
            @include('petcontributor.pets.create-detail')
        </div>
        <div x-show="activeTab === 3" class="flex flex-col w-full mt-1 justify-center items-center">
            @include('petcontributor.pets.create-health')
        </div>
    </div>
</x-petcontributor-layout>