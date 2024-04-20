<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::insert(
            [
                [
                    'name' => 'Київ',
                    'area' => 847.66,
                    'population' => 2804000,
                    'country_name' => 'Україна',
                ],
                [
                    'name' => 'Львів',
                    'area' => 182.01,
                    'population' => 724000,
                    'country_name' => 'Україна',
                ],
                [
                    'name' => 'Варшава',
                    'area' => 517.24,
                    'population' => 1793000,
                    'country_name' => 'Польща',
                ],
                [
                    'name' => 'Харків',
                    'area' => 350.44,
                    'population' => 1441000,
                    'country_name' => 'Україна',
                ],
                [
                    'name' => 'Лодзь',
                    'area' => 293.25,
                    'population' => 677000,
                    'country_name' => 'Польща',
                ]
            ]

        );
    }
}
