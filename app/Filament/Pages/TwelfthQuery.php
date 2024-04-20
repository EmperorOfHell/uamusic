<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\ServiceResource\Widgets\Service;
use Filament\Pages\Page;

class TwelfthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.twelfth-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 12;

    protected function getFooterWidgets(): array
    {
        return [
            Service::class,
        ];
    }

}
