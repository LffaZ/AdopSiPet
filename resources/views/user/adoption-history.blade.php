@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Riwayat Adopsi</h1>

    @if($adoptions->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach($adoptions as $adoption)
        <div class="bg-white rounded-lg shadow p-4">
            <!-- ambil nama pet -->
            <h2 class="text-lg font-semibold">{{ $adoption->kd_pet }}</h2>
            <p class="text-gray-600">Tanggal Adopsi: {{ $adoption->tanggal }}</p>
            <p class="text-gray-600">Status Pembayaran: {{ $adoption->status }}</p>
            <!-- Tambahkan informasi lain yang Anda ingin tampilkan -->
        </div>
        @endforeach
    </div>
    @else
    <p>Tidak ada riwayat adopsi.</p>
    @endif
</div>
@endsection
