<?php

namespace Database\Seeders;

use App\Models\TicketService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketService::insert(
            [
                [
                    'ticket_number' => '123456789',
                    'service_name' => 'Фотосесія',
                ],
                [
                    'ticket_number' => '987654321',
                    'service_name' => 'Зустріч з фанами',
                ],
                [
                    'ticket_number' => '456789123',
                    'service_name' => 'Екскурсія',
                ],
                [
                    'ticket_number' => '789123456',
                    'service_name' => 'Meet and Greet',
                ],
                [
                    'ticket_number' => '321654987',
                    'service_name' => 'Післяпарті',
                ]
            ]

        );
    }
}
