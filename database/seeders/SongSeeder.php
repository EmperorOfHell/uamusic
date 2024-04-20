<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::insert(
            [
                [
                    'name' => 'Там, де нас нема',
                    'duration' => 172,
                    'language' => 'українська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Люди',
                    'duration' => 210,
                    'language' => 'українська',
                    'album_name' => 'Люди',
                ],
                [
                    'name' => 'Голос твій',
                    'duration' => 180,
                    'language' => 'українська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Тадж Махал',
                    'duration' => 300,
                    'language' => 'українська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Майже весна',
                    'duration' => 251,
                    'language' => 'українська',
                    'album_name' => 'Суперсиметрія',
                ],

                [
                    'name' => 'Йду на дно',
                    'duration' => 220,
                    'language' => 'українська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Мала',
                    'duration' => 180,
                    'language' => 'українська',
                    'album_name' => 'Люди',
                ],
                [
                    'name' => 'Long Time Ago',
                    'duration' => 260,
                    'language' => 'англійська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Вісім',
                    'duration' => 290,
                    'language' => 'українська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Кішка',
                    'duration' => 240,
                    'language' => 'українська',
                    'album_name' => 'Суперсиметрія',
                ],
                [
                    'name' => 'Старі фотографії',
                    'duration' => 200,
                    'language' => 'українська',
                    'album_name' => 'Танго',
                ],
                [
                    'name' => 'Злива',
                    'duration' => 230,
                    'language' => 'українська',
                    'album_name' => 'Люди',
                ],
                [
                    'name' => 'Доля',
                    'duration' => 270,
                    'language' => 'українська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Новий день',
                    'duration' => 210,
                    'language' => 'українська',
                    'album_name' => 'Там, де нас нема',
                ],
                [
                    'name' => 'Діти',
                    'duration' => 300,
                    'language' => 'українська',
                    'album_name' => 'Танго',
                ],
                [
                    'name' => 'Люди як кораблі',
                    'duration' => 250,
                    'language' => 'українська',
                    'album_name' => 'Танго',
                ],
                [
                    'name' => 'Телефони',
                    'duration' => 190,
                    'language' => 'українська',
                    'album_name' => 'Танго',
                ],
                [
                    'name' => 'Alambari',
                    'duration' => 657,
                    'language' => 'українська',
                    'album_name' => 'Alambari',
                ],
                [
                    'name' => 'Хмари',
                    'duration' => 260,
                    'language' => 'українська',
                    'album_name' => 'Alambari',
                ],
                [
                    'name' => 'Vynnaya Ya',
                    'duration' => 373,
                    'language' => 'українська',
                    'album_name' => 'Alambari',
                ]


            ]

        );
    }
}
