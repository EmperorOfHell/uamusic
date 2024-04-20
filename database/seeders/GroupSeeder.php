<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::insert(
            [
                [
                    'name' => 'Okean Elzy',
                    'founded_date' => '1994-12-03',
                    'num_members' => 5,
                    'genre_name' => 'Рок',
                ],
                [
                    'name' => 'Тінь Сонця',
                    'founded_date' => '2008-05-20',
                    'num_members' => 4,
                    'genre_name' => 'Фолк',
                ],
                [
                    'name' => 'Boombox',
                    'founded_date' => '2004-06-21',
                    'num_members' => 2,
                    'genre_name' => 'Хіп-хоп',
                ],
                [
                    'name' => 'Скрябін',
                    'founded_date' => '1989-03-12',
                    'num_members' => 6,
                    'genre_name' => 'Поп',
                ],
                [
                    'name' => 'DakhaBrakha',
                    'founded_date' => '2004-02-01',
                    'num_members' => 4,
                    'genre_name' => 'Фолк',
                ]
            ]

        );
    }
}
