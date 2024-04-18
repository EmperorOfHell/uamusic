<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\MerchandiseResource\Merchandise;
use Filament\Pages\Page;

class EleventhQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.eleventh-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 11;

    protected function getFooterWidgets(): array
    {
        return [
            Merchandise::class
        ];
    }
}
