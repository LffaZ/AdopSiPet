<form id="form-pet-detail" method="POST" action="{{ route('petcontributor.petdetails.store') }}" class="w-full flex flex-row justify-center gap-7">
@csrf
    <div class="w-1/2">
        <div class="mb-5">
            <label for="jenkel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
            <select class="border-gray-300 text-sm text-gray-900 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="jenkel" type="jenkel" name="jenkel" required="required">
                <option value="jantan">Jantan</option>
                <option value="betina">Betina</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <input type="text" id="deskripsi" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Deskripsi tentang hewan" required>
        </div>
        <div class="mb-5">
            <label for="karakter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Karakter</label>
            <input type="text" id="karakter" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Karakter hewan" required>
        </div>
    </div>
    <div class="w-1/2">
        <div class="mb-5">
            <label for="warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
            <input type="text" id="warna" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Warna hewan" required>
        </div>
        <div class="mb-5">
            <label for="berat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat (kg)</label>
            <input type="number" min="0" id="berat" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Berat hewan dalam satuan kilogram" required>
        </div>
        <div class="mb-5">
            <label for="panjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Panjang (cm)</label>
            <input type="number" min="0" id="panjang" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Panjang hewan dalam satuan centimeter" required>
        </div>
        <div class="mb-5">
            <label for="usia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia (bulan)</label>
            <input type="number" min="0" id="usia" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Usia hewan dalam satuan bulan" required>
        </div>
        <div class="w-full flex gap-3 justify-end">
            <div x-on:click="activeTab = 1" class="text-white w-1/4 bg-blue-400 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</div>
            <div x-on:click="activeTab = 3" class="text-white w-1/4 bg-[#ff6c03] hover:bg-[#e77728] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Selanjutnya</div>
        </div>
    </div>
</form>