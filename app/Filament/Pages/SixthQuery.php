<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\ConcertResource\Widgets\Concert;
use Filament\Pages\Page;

class SixthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.sixth-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 6;

    protected function getFooterWidgets(): array
    {
        return [
            Concert::class,
        ];
    }

}
