<?php

namespace Database\Seeders;

use App\Models\AlbumType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlbumType::insert(
            [
                [
                    'type' => 'сінгл',
                    'num_of_songs' => 1,
                ],
                [
                    'type' => 'альбом',
                    'num_of_songs' => 10,
                ],
                [
                    'type' => 'подвійний альбом',
                    'num_of_songs' => 20,
                ],
                [
                    'type' => 'міні-альбом',
                    'num_of_songs' => 5,
                ],
                [
                    'type' => 'концертний альбом',
                    'num_of_songs' => 15,
                ]
            ]

        );
    }
}
