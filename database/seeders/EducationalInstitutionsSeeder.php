<?php

namespace Database\Seeders;

use App\Models\EducationalInstitution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationalInstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EducationalInstitution::insert(
            [

                [
                    'name' => 'ВНТУ',
                    'address' => 'вул. Хмельницьке шосе, 95, Вiнниця, Україна',
                ],
                [
                    'name' => 'Жешувський Університет',
                    'address' => 'вул. Міцкевича, 3, Жешув, Польща',
                ],
                [
                    'name' => 'ЛНМА ім. М. Лисенка',
                    'address' => 'вул. Лісова, 1, Львів, Україна',
                ],
                [
                    'name' => 'Київський Національний Університет імені Тараса Шевченка',
                    'address' => 'вул. Володимирська, 60, Київ, Україна',
                ],
                [
                    'name' => 'Харківський Національний Університет імені В. Н. Каразіна',
                    'address' => 'майдан Свободи, 4, Харків, Україна',
                ]
            ]


        );
    }
}
