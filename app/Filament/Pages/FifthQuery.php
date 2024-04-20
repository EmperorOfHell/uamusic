<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\TourResource\Widgets\Tour;
use Filament\Pages\Page;

class FifthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.fifth-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 5;

    protected function getFooterWidgets(): array
    {
        return [
            Tour::class,
        ];
    }

}
