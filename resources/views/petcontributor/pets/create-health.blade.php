<form id="form-pet-health" method="POST" action="{{ route('petcontributor.pethealths.store') }}" class="w-1/2 py-3 px-6 bg-white rounded-lg flex flex-col justify-center gap-2">
@csrf
    <div class="mb-3">
        <label for="foto_cekdokter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cek Dokter</label>
        <!-- input gambar -->
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto_cekdokter" type="file">
    </div>
    <div class="mb-0">
        <label for="stts_vaksin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Vaksin</label>
        <div class="flex gap-5">
            <div class="flex flex-col">
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="rabies" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rabies</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="rinotrakeitis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rinotrakeitis</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="kalisivirus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kalisivirus</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="panleukopenia" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Panleukopenia</label>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="parvovirus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Parvovirus</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="distemper" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Distemper</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="canine hepatitis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Canine Hepatitis</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="stts_vaksin" name="stts_vaksin" type="checkbox" value="tricat" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="stts_vaksin" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tricat</label>
                </div>
            </div>

        </div>
    </div>
    <div class="mb-5">
        <label for="warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Steril?</label>
        <div class="flex mt-1 gap-3">
            <div class="flex items-center">
                <input id="stts_steril" type="radio" name="stts_steril" value="true" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="stts_steril" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="flex items-center">
                <input id="stts_steril" type="radio" name="stts_steril" value="false" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="stts_steril" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
        </div>
    </div>
    <div class="mb-0">
        <label for="riwayat_penyakit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat penyakit</label>
        <div class="flex gap-5">
            <div class="flex flex-col">
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="rabius" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rabies</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="bartonella" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Infeksi bakteri bartonella henselae</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="kurap" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kurap</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="toksoplasmosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Toksoplasmosis</label>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="infeksi-cacing" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Infeksi Cacing</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="parainflunza" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Parainfluenza</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="campylobacter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Campylobacter</label>
                </div>
                <div class="flex flex-row items-center mb-4">
                    <input id="riwayat_penyakit" name="riwayat_penyakit" type="checkbox" value="koriomeningitis-limfositik" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="riwayat_penyakit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koriomeningitis limfositik</label>
                </div>
            </div>

        </div>
    </div>
</form>
<div class="w-full flex gap-3 justify-center">
    <div x-on:click="activeTab = 2" class="text-white w-1/6 bg-blue-400 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</div>
    <button type="submit" id="submit-all-forms" class="text-white w-1/6 bg-[#ff6c03] hover:bg-[#e77728] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
</div>