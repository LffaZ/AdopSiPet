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
                'nama' => 'Alifah Z.',
                'email' => 'alifah.zuhrah@gmail.com',
                'password' => bcrypt('sayadev'),
                'jenkel' => 'perempuan',
                'no_hp' => '085963173174',
                'tgl_lahir' => Carbon::parse('2007-11-15'),
                'is_admin' => false
            ]
        );
        User::create(
            [
                'nama' => 'Laras Ayy',
                'email' => 'larasayy@gmail.com',
                'password' => bcrypt('temandev'),
                'jenkel' => 'perempuan',
                'no_hp' => '08923457643',
                'tgl_lahir' => Carbon::parse('2005-08-08'),
                'is_admin' => false
            ]
        );
        User::create(
            [
                'nama' => 'Pasya Ayy',
                'email' => 'pasyaayye@gmail.com',
                'password' => bcrypt('temandev'),
                'jenkel' => 'perempuan',
                'no_hp' => '089234678968',
                'tgl_lahir' => Carbon::parse('2006-10-17'),
                'is_admin' => false
            ]
        );
        
        User::create([
            'nama' => 'Yudea Santoso',
            'email' => 'yoedeasantoso@gmail.com',
            'password' => bcrypt('password123'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08123456789',
            'tgl_lahir' => Carbon::parse('1990-05-15'),
            'is_admin' => false,
        ]);
        
        // User 2
        User::create([
            'nama' => 'Siti Aisyah',
            'email' => 'siti_aisyah@gmail.com',
            'password' => bcrypt('secret789'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08765432100',
            'tgl_lahir' => Carbon::parse('1988-12-22'),
            'is_admin' => false,
        ]);
        
        // User 3
        User::create([
            'nama' => 'Yuki Tanaka',
            'email' => 'yuki_tanaka@yahoo.co.jp',
            'password' => bcrypt('yuki_password'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08012345678',
            'tgl_lahir' => Carbon::parse('1995-06-10'),
            'is_admin' => false,
        ]);
        
        // User 4
        User::create([
            'nama' => 'Ahmad Susanto',
            'email' => 'ahmad_susanto@gmail.com',
            'password' => bcrypt('ahmad123'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08111223344',
            'tgl_lahir' => Carbon::parse('1987-03-28'),
            'is_admin' => false,
        ]);
        
        // User 5
        User::create([
            'nama' => 'Yukihiro Nakamura',
            'email' => 'yukihiro_nakamura@gmail.com',
            'password' => bcrypt('nakamura456'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08234567890',
            'tgl_lahir' => Carbon::parse('1992-09-15'),
            'is_admin' => false,
        ]);
        
        // User 6
        User::create([
            'nama' => 'Rini Hidayah',
            'email' => 'rini_hidayah@yahoo.co.id',
            'password' => bcrypt('rini_password'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08199887766',
            'tgl_lahir' => Carbon::parse('1985-11-02'),
            'is_admin' => false,
        ]);
        
        // User 7
        User::create([
            'nama' => 'Takahiro Suzuki',
            'email' => 'takahiro_suzuki@gmail.com',
            'password' => bcrypt('suzuki789'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08771234567',
            'tgl_lahir' => Carbon::parse('1994-04-20'),
            'is_admin' => false,
        ]);
        
        // User 8
        User::create([
            'nama' => 'Lestari Wijaya',
            'email' => 'lestar_wijaya@gmail.com',
            'password' => bcrypt('lestari_password'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08121234567',
            'tgl_lahir' => Carbon::parse('1993-07-08'),
            'is_admin' => false,
        ]);
        
        // User 9
        User::create([
            'nama' => 'Kenji Ito',
            'email' => 'kenji_ito@yahoo.co.jp',
            'password' => bcrypt('kenji123'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08098765432',
            'tgl_lahir' => Carbon::parse('1989-02-12'),
            'is_admin' => false,
        ]);
        
        // User 10
        User::create([
            'nama' => 'Dewi Susanti',
            'email' => 'dewi_susanti@gmail.com',
            'password' => bcrypt('dewi456'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08176543210',
            'tgl_lahir' => Carbon::parse('1991-10-25'),
            'is_admin' => false,
        ]);

        User::create([
            'nama' => 'Aria Pratama',
            'email' => 'aria_pratama@gmail.com',
            'password' => bcrypt('aria123'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08123456789',
            'tgl_lahir' => Carbon::parse('1993-08-20'),
            'is_admin' => false,
        ]);
        
        // User 12
        User::create([
            'nama' => 'Safira Putri',
            'email' => 'safira_putri@yahoo.com',
            'password' => bcrypt('safira456'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08234567890',
            'tgl_lahir' => Carbon::parse('1992-05-15'),
            'is_admin' => false,
        ]);
        
        // User 13
        User::create([
            'nama' => 'Rendra Nugraha',
            'email' => 'rendra_nugraha@gmail.com',
            'password' => bcrypt('rendra789'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08111223344',
            'tgl_lahir' => Carbon::parse('1990-11-28'),
            'is_admin' => false,
        ]);
        
        // User 14
        User::create([
            'nama' => 'Dina Marwah',
            'email' => 'marriewa@yahoo.co.id',
            'password' => bcrypt('dina_password'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08765432100',
            'tgl_lahir' => Carbon::parse('1995-02-22'),
            'is_admin' => false,
        ]);
        
        // User 15
        User::create([
            'nama' => 'Rizki Firmansyah',
            'email' => 'rizki_firmansyah@gmail.com',
            'password' => bcrypt('rizki123'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08199887766',
            'tgl_lahir' => Carbon::parse('1991-09-10'),
            'is_admin' => false,
        ]);

        User::create([
            'nama' => 'Nadia Kartika',
            'email' => 'naddikart@gmail.com',
            'password' => bcrypt('nadia567'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08111223344',
            'tgl_lahir' => Carbon::parse('1994-04-18'),
            'is_admin' => false,
        ]);
        
        // User 17
        User::create([
            'nama' => 'Fauzan Akbar',
            'email' => 'fauzan_akbar@yahoo.com',
            'password' => bcrypt('fauzan123'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08223344556',
            'tgl_lahir' => Carbon::parse('2002-07-27'),
            'is_admin' => false,
        ]);
        
        // User 18
        User::create([
            'nama' => 'Alya Rahman',
            'email' => 'alyaraan@gmail.com',
            'password' => bcrypt('alya789'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08123456789',
            'tgl_lahir' => Carbon::parse('1989-12-05'),
            'is_admin' => false,
        ]);
        
        // User 19
        User::create([
            'nama' => 'Arifin Setiawan',
            'email' => 'arifin_setiawan@yahoo.co.id',
            'password' => bcrypt('arifin_password'),
            'jenkel' => 'Laki-laki',
            'no_hp' => '08987654321',
            'tgl_lahir' => Carbon::parse('2000-01-30'),
            'is_admin' => false,
        ]);
        
        // User 20
        User::create([
            'nama' => 'Larasati Permata',
            'email' => 'larasati_permata@gmail.com',
            'password' => bcrypt('larasati123'),
            'jenkel' => 'Perempuan',
            'no_hp' => '08765432100',
            'tgl_lahir' => Carbon::parse('1993-06-14'),
            'is_admin' => false,
        ]);
    }
}
