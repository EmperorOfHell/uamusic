<?php

namespace Database\Seeders;

use App\Models\Concert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concert::insert(
            [
                [
                    'name' => 'Мітрополія у Києві',
                    'city_name' => 'Київ',
                    'address' => 'Майдан Незалежності, 1',
                    'date' => '2024-05-05',
                    'tour_name' => 'Мітрополія тур',
                ],
                [
                    'name' => 'Світло у Львові',
                    'city_name' => 'Львів',
                    'address' => 'Площа Ринок, 1',
                    'date' => '2024-06-15',
                    'tour_name' => 'Світло тур',
                ],
                [
                    'name' => 'Енергія у Варшаві',
                    'city_name' => 'Варшава',
                    'address' => 'Plac Defilad 1',
                    'date' => '2024-07-10',
                    'tour_name' => 'Енергія тур',
                ],
                [
                    'name' => 'Новий день у Харкові',
                    'city_name' => 'Харків',
                    'address' => 'пл. Свободи, 1',
                    'date' => '2024-08-25',
                    'tour_name' => 'Новий день тур',
                ],
                [
                    'name' => 'Шлях у Лодзі',
                    'city_name' => 'Лодзь',
                    'address' => 'Plac Wolności 1',
                    'date' => '2024-09-20',
                    'tour_name' => 'Шлях тур',
                ]
            ]
        );
    }
}
