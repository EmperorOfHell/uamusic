<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::insert(
            [
                [
                    'name' => 'Україна',
                    'continent' => 'Європа',
                    'climate' => 'переважно помірний континентальний',
                ],
                [
                    'name' => 'США',
                    'continent' => 'Північна Америка',
                    'climate' => 'різноманітний, від тропічного до помірного',
                ],
                [
                    'name' => 'Канада',
                    'continent' => 'Північна Америка',
                    'climate' => 'від помірного до арктичного',
                ],
                [
                    'name' => 'Бразилія',
                    'continent' => 'Південна Америка',
                    'climate' => 'різноманітний, від тропічного до помірного',
                ],
                [
                    'name' => 'Іспанія',
                    'continent' => 'Європа',
                    'climate' => 'переважно помірний',
                ],
                [
                    'name' => 'Польща',
                    'continent' => 'Європа',
                    'climate' => 'помірний континентальний',
                ]
            ]
        );
    }
}
