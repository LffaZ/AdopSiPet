<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pet::create(
            [
                'id_petcontributor' => 1,
                'images' => '["petphoto\/65d311630c70d_1708331363.jpg"]',
                'nama' => 'Whiskers',
                'category' => 'cat',
                'stts_kepemilikan' => 'liar',
                'harga' => 340000,
            ]
        );
        Pet::create(
            [
                'id_petcontributor' => 1,
                'images' => '["petphoto\/65d311b722a02_1708331447.jpg"]',
                'nama' => 'Luna',
                'category' => 'cat',
                'stts_kepemilikan' => 'pribadi',
                'harga' => 200000,
            ]
        );
        Pet::create(
            [
                'id_petcontributor' => 1,
                'images' => '["petphoto\/65d311c06198e_1708331456.jpg"]',
                'nama' => 'Bella',
                'category' => 'cat',
                'stts_kepemilikan' => 'pribadi',
                'harga' => 200000,
            ]
        );
        Pet::create([
            'id_petcontributor' => 1,
            'images' => '["petphoto\/65d311e64f87f_1708331494.jpg"]',
            'nama' => 'Simba',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 299990,
        ]);

        Pet::create([
            'id_petcontributor' => 2,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Leo',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 265000,
        ]);

        // Pet 2
        Pet::create([
            'id_petcontributor' => 2,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Lili',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 290000,
        ]);

        // Pet 3
        Pet::create([
            'id_petcontributor' => 2,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Milo',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 245000,
        ]);

        // Pet 4
        Pet::create([
            'id_petcontributor' => 5,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Miwawe',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 200000,
        ]);

        // Pet 5
        Pet::create([
            'id_petcontributor' => 5,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Shiba',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 190000,
        ]);

        // Pet 6
        Pet::create([
            'id_petcontributor' => 5,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Gembul',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 320000,
        ]);

        // Pet 7
        Pet::create([
            'id_petcontributor' => 5,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Plush',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 800000,
        ]);

        // Pet 8
        Pet::create([
            'id_petcontributor' => 5,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Tomma',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 320000,
        ]);

        // Pet 9
        Pet::create([
            'id_petcontributor' => 5,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Amma',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 400000,
        ]);

        // Pet 10
        Pet::create([
            'id_petcontributor' => 7,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Mammo',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 345000,
        ]);

        Pet::create([
            'id_petcontributor' => 7,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Mewo',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 300000,
        ]);

        // Pet 12
        Pet::create([
            'id_petcontributor' => 7,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Ami',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 233000,
        ]);

        // Pet 13
        Pet::create([
            'id_petcontributor' => 8,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Amoa',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 256000,
        ]);

        // Pet 14
        Pet::create([
            'id_petcontributor' => 8,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Tomito',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 250000,
        ]);

        // Pet 15
        Pet::create([
            'id_petcontributor' => 8,
            'images' => '["petphoto\/65d312109d2d2_1708331536.jpg"]',
            'nama' => 'Tutu',
            'category' => 'cat',
            'stts_kepemilikan' => 'pribadi',
            'harga' => 200000,
        ]);
    }
}
