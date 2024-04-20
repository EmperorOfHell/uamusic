<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::insert(
            [
                [
                    'ticket_number' => '123456789',
                    'concert_name' => 'Мітрополія у Києві',
                    'seat' => 'Сектор A, Ряд 1, Місце 5',
                    'cost' => 150.00,
                ],
                [
                    'ticket_number' => '987654321',
                    'concert_name' => 'Світло у Львові',
                    'seat' => 'Сектор B, Ряд 2, Місце 10',
                    'cost' => 120.00,
                ],
                [
                    'ticket_number' => '456789123',
                    'concert_name' => 'Енергія у Варшаві',
                    'seat' => 'Сектор C, Ряд 3, Місце 15',
                    'cost' => 200.00,
                ],
                [
                    'ticket_number' => '789123456',
                    'concert_name' => 'Новий день у Харкові',
                    'seat' => 'Сектор D, Ряд 4, Місце 20',
                    'cost' => 180.00,
                ],
                [
                    'ticket_number' => '321654987',
                    'concert_name' => 'Шлях у Лодзі',
                    'seat' => 'Сектор E, Ряд 5, Місце 25',
                    'cost' => 160.00,
                ]
            ]

        );
    }
}
