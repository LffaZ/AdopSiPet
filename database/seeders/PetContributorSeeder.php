<?php

namespace Database\Seeders;

use App\Models\PetContributor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PetContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    PetContributor::create(
            [
                'nama' => 'catlover',
                'email' => 'catlover@gmail.com',
                'password' => bcrypt('sayadev'),
                'jenkel' => 'laki-laki',
                'no_hp' => '089633294141',
                'tgl_lahir' => Carbon::parse('2006-10-11')
            ]
        );
    }
}
