<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert(
            [
                [
                    'name' => 'Поп',
                    'popularity' => 90,
                    'description' => 'Популярний жанр музики, характеризується легкими мелодіями та текстами.',
                ],
                [
                    'name' => 'Рок',
                    'popularity' => 85,
                    'description' => 'Жанр музики з використанням гітар та рокових ритмів.',
                ],
                [
                    'name' => 'Хіп-хоп',
                    'popularity' => 80,
                    'description' => 'Жанр музики, який виник у чорношкірої спільноти, характеризується ритмічними вокалівими фразами та звуком бітів.',
                ],
                [
                    'name' => 'Електронна',
                    'popularity' => 70,
                    'description' => 'Жанр музики, де основним інструментом є синтезатори та компютерні програми . ',
                ],
                [
                    'name' => 'Фолк',
                    'popularity' => 60,
                    'description' => 'Традиційний народний жанр музики, який передає культурні та історичні аспекти різних народів . ',
                ]
            ]
        );
    }
}
