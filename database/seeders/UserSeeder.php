<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'nama' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('adminadopsipet'),
                'is_admin' => true
            ]
        );
        User::create(
            [
                'nama' => 'alifahz',
                'email' => 'alifah.zuhrah@gmail.com',
                'password' => bcrypt('sayadev'),
                'jenkel' => 'perempuan',
                'no_hp' => '085963173174',
                'tgl_lahir' => Carbon::parse('2007-11-15'),
                'is_admin' => false
            ]
        );
    }
}
