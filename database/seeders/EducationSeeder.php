<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::insert(
            [
                [
                    'diploma_number' => 123456789,
                    'institution_name' => 'ВНТУ',
                    'graduation_year' => 2015,
                    'specialty_number' => '122',
                    'degree' => 'Бакалавр',
                ],
                [
                    'diploma_number' => 987654321,
                    'institution_name' => 'Київський Національний Університет імені Тараса Шевченка',
                    'graduation_year' => 2020,
                    'specialty_number' => '101',
                    'degree' => 'Магістр',
                ],
                [
                    'diploma_number' => 456789123,
                    'institution_name' => 'ЛНМА ім. М. Лисенка',
                    'graduation_year' => 2018,
                    'specialty_number' => '311',
                    'degree' => 'Спеціаліст',
                ],
                [
                    'diploma_number' => 789123456,
                    'institution_name' => 'Жешувський Університет',
                    'graduation_year' => 2016,
                    'specialty_number' => '222',
                    'degree' => 'Бакалавр',
                ],
                [
                    'diploma_number' => 321654987,
                    'institution_name' => 'Харківський Національний Університет імені В. Н. Каразіна',
                    'graduation_year' => 2019,
                    'specialty_number' => '401',
                    'degree' => 'Спеціаліст',
                ]
            ]

        );
    }
}
