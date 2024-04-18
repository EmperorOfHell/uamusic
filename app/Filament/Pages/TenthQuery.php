<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\CountryResource\Widgets\Country;
use Filament\Pages\Page;

class TenthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.tenth-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 10;

    protected function getFooterWidgets(): array
    {
        return [
            Country::class,
        ];
    }

}
