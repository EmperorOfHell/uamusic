<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\TicketResource\Widgets\Ticket;
use Filament\Pages\Page;

class SeventhQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.seventh-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 7;

    protected function getFooterWidgets(): array
    {
        return [
            Ticket::class,
        ];
    }

}
