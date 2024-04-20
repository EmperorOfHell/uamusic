<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert(
            [
                [
                    'name' => 'Фотосесія',
                    'cost' => 500.00,
                    'description' => 'Професійна фотосесія на фоні пам\'ятних місць під час концерту.',
                ],
                [
                    'name' => 'Зустріч з фанами',
                    'cost' => 200.00,
                    'description' => 'Організація зустрічі з фанатами після концерту для автограф-сесії та спілкування.',
                ],
                [
                    'name' => 'Екскурсія',
                    'cost' => 300.00,
                    'description' => 'Екскурсія по місту в супроводі гіда для учасників туру.',
                ],
                [
                    'name' => 'Meet and Greet',
                    'cost' => 400.00,
                    'description' => 'Організація особистої зустрічі з учасниками групи перед концертом.',
                ],
                [
                    'name' => 'Післяпарті',
                    'cost' => 600.00,
                    'description' => 'Організація вечірки з учасниками групи після завершення концерту.',
                ]
            ]

        );
    }
}
