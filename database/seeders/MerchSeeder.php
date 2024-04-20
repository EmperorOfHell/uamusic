<?php

namespace Database\Seeders;

use App\Models\Merchandise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merchandise::insert(
            [
                [
                    'name' => 'Футболка "Мітрополія"',
                    'tour_name' => 'Мітрополія тур',
                    'type' => 'Футболка',
                    'cost' => 250.00,
                ],
                [
                    'name' => 'Кружка "Світло"',
                    'tour_name' => 'Світло тур',
                    'type' => 'Кружка',
                    'cost' => 100.00,
                ],
                [
                    'name' => 'Кепка "Енергія"',
                    'tour_name' => 'Енергія тур',
                    'type' => 'Кепка',
                    'cost' => 150.00,
                ],
                [
                    'name' => 'Пляшка "Новий день"',
                    'tour_name' => 'Новий день тур',
                    'type' => 'Пляшка',
                    'cost' => 80.00,
                ],
                [
                    'name' => 'Рюкзак "Шлях"',
                    'tour_name' => 'Шлях тур',
                    'type' => 'Рюкзак',
                    'cost' => 300.00,
                ]
            ]

        );
    }
}
