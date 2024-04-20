<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialty::insert(
            [
                [
                    'number' => '122',
                    'name' => 'Компютерні науки',
                ],
                [
                    'number' => '101',
                    'name' => 'Економіка',
                ],
                [
                    'number' => '311',
                    'name' => 'Медицина',
                ],
                [
                    'number' => '222',
                    'name' => 'Менеджмент',
                ],
                [
                    'number' => '401',
                    'name' => 'Право',
                ]
            ]
        );
    }
}
