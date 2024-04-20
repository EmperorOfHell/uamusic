<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tour::insert(
            [
                [
                    'name' => 'Мітрополія тур',
                    'group_name' => 'Okean Elzy',
                    'start_date' => '2024-05-01',
                    'end_date' => '2024-05-15',
                ],
                [
                    'name' => 'Світло тур',
                    'group_name' => 'Тінь Сонця',
                    'start_date' => '2024-06-10',
                    'end_date' => '2024-06-25',
                ],
                [
                    'name' => 'Енергія тур',
                    'group_name' => 'Boombox',
                    'start_date' => '2024-07-05',
                    'end_date' => '2024-07-20',
                ],
                [
                    'name' => 'Новий день тур',
                    'group_name' => 'Скрябін',
                    'start_date' => '2024-08-15',
                    'end_date' => '2024-08-30',
                ],
                [
                    'name' => 'Шлях тур',
                    'group_name' => 'DakhaBrakha',
                    'start_date' => '2024-09-10',
                    'end_date' => '2024-09-25',
                ]
            ]
        );
    }
}
