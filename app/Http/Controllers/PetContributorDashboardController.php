<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class PetContributorDashboardController extends Authenticatable
{
    use Notifiable;
    // __construct untuk membatasi hanya petcontributor yg sudah login yg mengakses
    // public function __construct()
    // {
    //     $this->middleware('auth:petcontributor');
    // }
    public function dashboard(Request $request)
    {
        // Mengakses variabel yang telah diset oleh middleware
        $showInstructionModal = $request->attributes->get('showInstructionModal');
        $adoptions = Adoption::with('petcontributor:id,nama')->with('user:id,nama')->with('pet:kd,nama')->latest()->paginate(5);
        // dd($showInstructionModal);

        $monthAbbreviations = [
            '01' => 'Jan',
            '02' => 'Feb',
            '03' => 'Mar',
            '04' => 'Apr',
            '05' => 'Mei',
            '06' => 'Jun',
            '07' => 'Jul',
            '08' => 'Agu',
            '09' => 'Sep',
            '10' => 'Okt',
            '11' => 'Nov',
            '12' => 'Des',
        ];

        $today = Carbon::now('Asia/Jakarta');

        // BALA BANTUAN JIPITI HADIR
        // 1. Menampilkan 7 hari terakhir
        $past7Days = $today->copy()->subDays(7);
        $past7DayRange = $past7Days->format('d M') . ' - ' . $today->subDay()->format('d M');

        // 2. Menampilkan minggu lalu
        $startOfWeek = $today->copy()->startOfWeek()->subWeek();
        $endOfWeek = $today->copy()->startOfWeek()->subDay();
        $lastWeekRange = $startOfWeek->format('d M') . ' - ' . $endOfWeek->format('d M');

        // 3. Menampilkan 30 hari terakhir
        $today = Carbon::now();
        $past30Days = $today->copy()->subDays(30);
        $past30DayRange = $past30Days->format('d M') . ' - ' . $today->format('d M');

        // 4. Menampilkan bulan lalu
        $startOfLastMonth = $today->copy()->subMonth()->startOfMonth();
        $endOfLastMonth = $today->copy()->subMonth()->endOfMonth();
        $lastMonthRange = $startOfLastMonth->format('d M') . ' - ' . $endOfLastMonth->format('d M');

        // 5. Menampilkan 90 hari terakhir
        $today = Carbon::now();
        $past90Days = $today->copy()->subDays(90);
        $past90DayRange = $past90Days->format('d M') . ' - ' . $today->format('d M');

        $totalAdopsi = Adoption::sum('total_nominal');


        return view('petcontributor.dashboard', ['showInstructionModal' => $showInstructionModal, 
                                                'past7DayRange' => $past7DayRange,
                                                'lastWeekRange' => $lastWeekRange,
                                                'past30DayRange' => $past30DayRange,
                                                'lastMonthRange' => $lastMonthRange,
                                                'past90DayRange' => $past90DayRange], compact('totalAdopsi', 'adoptions'));
    }
}
