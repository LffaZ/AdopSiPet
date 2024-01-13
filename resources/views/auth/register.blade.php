<x-guest-layout title="Register your account">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" placeholder="Nama" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <!-- <x-input-label for="email" :value="__('Email')" /> -->
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <!-- <x-input-label for="jenkel" :value="__('Jenis Kelamin')" /> -->
            <x-input-select id="jenkel" class="block mt-1 w-full" type="jenkel" name="jenkel" placeholder="Jenis Kelamin" required>
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
                <option value="lainnya">Lainnya</option>
            </x-input-select>
            <x-input-error :messages="$errors->get('jenkel')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <!-- <x-input-label for="no_hp" :value="__('No. Telepon')" /> -->
            <x-text-input id="no_hp" class="block mt-1 w-full" type="tel" name="no_hp" :value="old('no_hp')" placeholder="No. Telepon" required />
            <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
        </div>

        <!-- Birth -->
        <div class="mt-4">
            <x-text-input id="tgl_lahir" class="block mt-1 w-full" type="text" name="tgl_lahir" :value="old('tgl_lahir')" placeholder="Tanggal Lahir" onfocus="this.type='date'" onblur="this.type='text'" required />
            <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <!-- <x-input-label for="password" :value="__('Password')" /> -->

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 pointer-events-none">
                    <i class="fas fa-eye"></i>
                </div>
            </x-text-input>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Sudah terdaftar?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>