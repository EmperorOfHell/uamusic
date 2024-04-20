<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Concert;
use App\Models\EducationalInstitution;
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

        \App\Models\User::factory()->create([
            'name' => 'kosty',
            'email' => 'kosty@test.com',
        ]);
        $this->call([
            CountrySeeder::class,
            GenreSeeder::class,
            AlbumTypeSeeder::class,
            EducationalInstitutionsSeeder::class,
            SpecialtySeeder::class,
            GroupSeeder::class,
            AlbumSeeder::class,
            SongSeeder::class,
            EducationSeeder::class,
            PerformerSeeder::class,
            TourSeeder::class,
            CitySeeder::class,
            ConcertSeeder::class,
            MerchSeeder::class,
            ServiceSeeder::class,
            TicketSeeder::class,
            TicketServiceSeeder::class,

        ]);

    }
}
