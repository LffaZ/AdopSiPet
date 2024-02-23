<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PetContributor;
use App\Models\Adoption;
use Carbon\Carbon;


use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function dashboard()
    {
        // Konten dashboard admin
        $totalPengguna = User::count();
        $totalPenyedia = PetContributor::count();
        $totalAdopsi = Adoption::count();
        $adoptions = Adoption::with('petcontributor:id,nama')->with('user:id,nama')->with('pet:kd,nama')->latest()->paginate(5);

        $now = Carbon::now();
        foreach ($adoptions as $adoption) {
            // Ambil tanggal dan waktu dari database
            $createdAt = Carbon::createFromTimestamp(strtotime($adoption->created_at));
        
            $diff = $createdAt->diffForHumans();

            // Simpan pesan perbedaan waktu
            $adoption->tanggal = $diff;

            // Hitung perbedaan waktu dalam hari
            $diffInDays = $createdAt->diffInDays($now);
        
            // Hitung perbedaan waktu dalam jam
            $diffInHours = $createdAt->diffInHours($now);
        
            // Hitung perbedaan waktu dalam menit
            $diffInMinutes = $createdAt->diffInMinutes($now);
        
            // Logika untuk menampilkan pesan yang sesuai berdasarkan perbedaan waktu
            if ($diffInDays > 0) {
                $adoption->tanggal = $diffInDays . ' hari yang lalu';
            } elseif ($diffInHours > 0) {
                $adoption->tanggal = $diffInHours . ' jam yang lalu';
            } else {
                $adoption->tanggal = $diffInMinutes . ' menit yang lalu';
            }
        }
        return view('admin.dashboard', compact('totalPengguna', 'totalPenyedia', 'totalAdopsi', 'adoptions'));
    }
}
