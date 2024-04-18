<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use App\Models\Group;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'kosty',
//             'email' => 'kosty@test.com',
//         ]);
        Genre::create([
            'name' => 'Rock',
            'popularity' => 8, // Припустиме значення популярності
            'description' => 'Rock music genre description' // Опис жанру
        ]);

        Group::create([
            'name' => 'The Beatles',
            'founded_date' => '1960-01-01',
            'num_members' => 4,
            'genre' => 'Rock'
        ]);

    }
}
