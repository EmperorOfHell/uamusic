<?php

namespace Database\Seeders;

use App\Models\Performer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Performer::insert(
            [
                [
                    'nickname' => 'Скай',
                    'group_name' => 'Okean Elzy',
                    'role_in_group' => 'вокаліст',
                    'birth_country' => 'Україна',
                    'education_number' => 123456789,
                ],
                [
                    'nickname' => 'Сонячна',
                    'group_name' => 'Тінь Сонця',
                    'role_in_group' => 'гітарист',
                    'birth_country' => 'Україна',
                    'education_number' => null,
                ],
                [
                    'nickname' => 'DJ Buzzy',
                    'group_name' => 'Boombox',
                    'role_in_group' => 'діджей',
                    'birth_country' => 'Україна',
                    'education_number' => 789123456,
                ],
                [
                    'nickname' => 'Кузьма',
                    'group_name' => 'Скрябін',
                    'role_in_group' => 'вокаліст',
                    'birth_country' => 'Україна',
                    'education_number' => 456789123,
                ],
                [
                    'nickname' => 'Тетяна',
                    'group_name' => 'DakhaBrakha',
                    'role_in_group' => 'вокалістка',
                    'birth_country' => 'Україна',
                    'education_number' => null,
                ]
            ]

        );
    }
}
