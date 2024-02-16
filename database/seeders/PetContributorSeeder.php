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
                'nama' => 'Paw Atlantis',
                'email' => 'pawlantis@gmail.com',
                'password' => bcrypt('pawwwlantis'),
                'jenkel' => 'lainnya',
                'alamat' => 'Asem Jajar 8 No.2, Tembok Dukuh, Kec. Bubutan, Surabaya, Jawa Timur 60173',
                'no_hp' => '085807184500',
                'tgl_lahir' => Carbon::parse('2000-10-11')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Garfield Pets',
                'email' => 'garfurrield@gmail.com',
                'password' => bcrypt('garfurr'),
                'jenkel' => 'perempuan',
                'alamat' => 'Jl. Petemon Kali No.48, Petemon, Kec. Sawahan, Surabaya, Jawa Timur 60258',
                'no_hp' => '0813273643487',
                'tgl_lahir' => Carbon::parse('1996-09-19')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Diaz Pets',
                'email' => 'diaz.pets@gmail.com',
                'password' => bcrypt('diazpets0301'),
                'jenkel' => 'perempuan',
                'alamat' => 'Jl. Sumatera No.31-L, RT.002/RW.05, Gubeng, Kec. Gubeng, Surabaya, Jawa Timur 60281',
                'no_hp' => '093284234032',
                'tgl_lahir' => Carbon::parse('2000-01-03')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Kage Pets',
                'email' => 'pectkage@gmail.com',
                'password' => bcrypt('kagetpet'),
                'jenkel' => 'laki-laki',
                'alamat' => 'Jl. Achmad Jais No.88, Peneleh, Kec. Genteng, Surabaya, Jawa Timur 60274',
                'no_hp' => '088924445321',
                'tgl_lahir' => Carbon::parse('1999-05-21')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Zawa Paw',
                'email' => 'zawpaw@gmail.com',
                'password' => bcrypt('zawpaw'),
                'jenkel' => 'perempuan',
                'alamat' => 'Jl. Sulung Tengah No.4, Alun-alun Contong, Kec. Bubutan, Surabaya, Jawa Timur 60174',
                'no_hp' => '081328418871',
                'tgl_lahir' => Carbon::parse('2001-02-22')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Boom Surabaya',
                'email' => 'boombroom@gmail.com',
                'password' => bcrypt('boombroom'),
                'jenkel' => 'lainnya',
                'alamat' => 'Jl. Tidar No.194, Tembok Dukuh, Kec. Bubutan, Surabaya, Jawa Timur 60173',
                'no_hp' => '0315481916',
                'tgl_lahir' => Carbon::parse('2001-11-30')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Umah Ulo Pets',
                'email' => 'umahulo@gmail.com',
                'password' => bcrypt('umahulo'),
                'jenkel' => 'lainnya',
                'alamat' => 'Jl. Simo Kwagean No.18, Kupang Krajan, Kec. Sawahan, Surabaya, Jawa Timur 60253',
                'no_hp' => '081331071607',
                'tgl_lahir' => Carbon::parse('2000-04-01')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Candy Pet House',
                'email' => 'candyhouse@gmail.com',
                'password' => bcrypt('candyhouse'),
                'jenkel' => 'perempuan',
                'alamat' => 'Jl. Simo Rejo XXIII No.29, Simomulyo, Kec. Sukomanunggal, Surabaya, Jawa Timur 60281',
                'no_hp' => '081293342342',
                'tgl_lahir' => Carbon::parse('2000-02-13')
            ]
        );
        PetContributor::create(
            [
                'nama' => 'Pet Central',
                'email' => 'petcentral.id@gmail.com',
                'password' => bcrypt('petcent'),
                'jenkel' => 'lainnya',
                'alamat' => 'Jl. Raya Kupang Baru No.25, Sonokwijenan, Kec. Sukomanunggal, Surabaya, Jawa Timur 60189',
                'no_hp' => '081293885532',
                'tgl_lahir' => Carbon::parse('2000-09-11')
            ]
        );
    }
}
