<x-petcontributor-layout>
    <div class="flex flex-col px-5 justify-center items-center h-screen">
        <div class="flex flex-row-reverse w-full mt-5 ">
            <form method="POST" enctype="multipart/form-data" action="/petcontributor/pets/{{ $pet->kd }}/update" class="p-5 w-full flex flex-row-reverse justify-between">
                @csrf
                <div class="relative w-2/3 h-full p-[15px] ml-9 bg-white text-center rounded-[20px]">
                    <label for="input-file" id="drop-area" class="w-full">
                        <input type="file" name="images[]" accept="image/*" id="input-file" multiple hidden>
                        <div id="img-view" class="w-full h-full bg-cover bg-center max-w-full rounded-[20px] border-2 border-dashed border-[#bbb5ff] bg-[#f7f8ff] flex flex-col items-center justify-center" multiple>
                            <i class="text-6xl fa-solid fa-image w-[100px]"></i>
                            <p class="mt-[15px]">Tarik dan lepas atau klik disini<br>untuk unggah foto hewan</p>
                        </div>
                    </label>
                    <!-- <label class="block">
                        <span class="text-gray-700">Images</span>
                        <input type="file" name="images[]" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" multiple />
                    </label> -->
                    @error('images')
                    <div class="text-sm text-red-600">{{ $message === 'The images field is required.' ? 'Foto hewan harus diisi' : $message }}</div>
                    @enderror
                    <div class="absolute px-3 py-1 w-[89%] bg-white border border-gray-100 shadow-md rounded-md -bottom-16 left-9 h-1/5 pb-1 gap-1 z-10 items-center hidden" id="img-prapreview">
                        <div class="w-[15%] h-full bg-cover border-2 border-white rounded-md" id="img-preview"></div>
                    </div>
                </div>
                <div class="w-1/2 max-w-sm">
                    <div class="mb-5">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" value="{{ $pet->nama }}" id="nama" name="nama" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Nama hewan" required>
                    </div>
                    <div class="mb-5">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select class="border-gray-300 text-sm text-gray-900 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="category" type="category" name="category" required="required">
                            <option value="cat" {{ $pet->category == 'cat' ? 'selected' : '' }}>Kucing</option>
                            <option value="dog" {{ $pet->category == 'dog' ? 'selected' : '' }}>Anjing</option>
                            <option value="rabbit" {{ $pet->category == 'rabbit' ? 'selected' : '' }}>Kelinci</option>
                            <option value="hamster" {{ $pet->category == 'hamster' ? 'selected' : '' }}>Hamster</option>
                            <option value="bird" {{ $pet->category == 'bird' ? 'selected' : '' }}>Burung</option>
                            <option value="fish" {{ $pet->category == 'fish' ? 'selected' : '' }}>Ikan</option>
                            <option value="others" {{ $pet->category == 'others' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-5 flex flex-col">
                        <label for="stts_kepemilikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Kepemilikan</label>
                        <div class="flex mt-1 gap-3">
                            <div class="flex items-center">
                                <input type="radio" name="stts_kepemilikan" value="liar" {{ $pet->stts_kepemilikan == 'liar' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Liar</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="stts_kepemilikan" value="pribadi" {{ $pet->stts_kepemilikan == 'pribadi' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-white border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pribadi</label>
                            </div>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-white border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input type="text" value="{{ $pet->harga }}" id="harga" name="harga" class="rounded-none rounded-e-lg bg-white border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                        </div>
                    </div>
                    <button type="submit" class="text-white bg-[#ff6c03] hover:bg-[#e77728] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>
</x-petcontributor-layout>