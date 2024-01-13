<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('admin.dashboard') }}" :isActive="request()->routeIs('admin.dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Kontributor Hewan" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
        </x-slot>

        <x-sidebar.sublink title="Kontributor" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Hewan" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Pengguna" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
        </x-slot>

        <x-sidebar.sublink title="Informasi Pengguna" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Alamat" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Favorit" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Riwayat Pencarian" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Riwayat Adopsi" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />

    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Adopsi Hewan" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" />
    </x-sidebar.dropdown>

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">
        Dummy Links
    </div>

    @php
    $links = array_fill(0, 20, '');
    @endphp

    @foreach ($links as $index => $link)
    <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach

</x-perfect-scrollbar>