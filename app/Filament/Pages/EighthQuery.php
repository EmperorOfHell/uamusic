<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\CityResource\Widgets\City;
use Filament\Pages\Page;

class EighthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.eighth-query';

    protected static ?string $cluster = Queries::class;
    protected static ?int $navigationSort = 8;

    protected function getFooterWidgets(): array
    {
        return [
            City::class,
        ];
    }
}
