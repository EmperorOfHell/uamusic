<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-in-order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the migrations in the order specified in the file app/Console/Comands/MigrateInOrder.php \n Drop all the table in db before execute the command.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /**
         * Specify the names of the migrations files in the order you want to load
         * $migrations =[
         *               'xxxx_xx_xx_000000_create_nameTable_table.php',
         *    ];
         */

        $migrations = $this->migrateOrder();
        foreach ($migrations as $migration) {
            $basePath = 'database/migrations/';
            $migrationName = trim($migration);
            $path = $basePath . $migrationName;
            $this->call('migrate', [
                '--path' => $path,
            ]);
        }
    }

    private function migrateOrder()
    {
        return [
            '2014_10_12_000000_create_users_table.php',
            '2014_10_12_100000_create_password_reset_tokens_table.php',
            '2019_08_19_000000_create_failed_jobs_table.php',
            '2019_12_14_000001_create_personal_access_tokens_table.php',
            '2024_04_18_080306_create_countries_table.php',
            '2024_04_17_182914_create_genres_table.php',
            '2024_04_17_175147_create_album_types_table.php',
            '2024_04_18_080217_create_educational_institutions_table.php',
            '2024_04_18_080250_create_specialties_table.php',
            '2024_04_17_175159_create_groups_table.php',
            '2024_04_17_175127_create_albums_table.php',
            '2024_04_17_174503_create_songs_table.php',
            '2024_04_18_075939_create_education_table.php',
            '2024_04_17_181152_create_performers_table.php',
            '2024_04_18_074614_create_tours_table.php',
            '2024_04_18_074645_create_cities_table.php',
            '2024_04_18_074625_create_concerts_table.php',
            '2024_04_18_082109_create_merchandises_table.php',
            '2024_04_18_082041_create_services_table.php',
            '2024_04_18_082058_create_tickets_table.php',
            '2024_04_18_082601_create_ticket_service.php',
        ];

    }
}

