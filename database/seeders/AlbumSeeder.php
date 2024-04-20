<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::insert(
            [
                [
                    'name' => 'Там, де нас нема',
                    'release_date' => '1998-09-14',
                    'num_of_songs' => 10,
                    'group_name' => 'Okean Elzy',
                ],
                [
                    'name' => 'Суперсиметрія',
                    'release_date' => '2003-03-12',
                    'num_of_songs' => 10,
                    'group_name' => 'Okean Elzy',
                ],
                [
                    'name' => 'Весільний альбом',
                    'release_date' => '2022-09-30',
                    'num_of_songs' => 15,
                    'group_name' => 'Тінь Сонця',
                ],
                [
                    'name' => 'Люди',
                    'release_date' => '2016-01-01',
                    'num_of_songs' => 10,
                    'group_name' => 'Boombox',
                ],
                [
                    'name' => 'Танго',
                    'release_date' => '2005-01-01',
                    'num_of_songs' => 15,
                    'group_name' => 'Скрябін',
                ],
                [
                    'name' => 'Alambari',
                    'release_date' => '2020-03-27',
                    'num_of_songs' => 10,
                    'group_name' => 'DakhaBrakha',
                ]
            ]
        );
    }
}
