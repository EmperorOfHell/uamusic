<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;

use App\Filament\Resources\AlbumResource\Widgets\Album;
use Filament\Pages\Page;

class SecondQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.second-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 2;

    protected function getFooterWidgets(): array
    {
        return [
            Album::class,
        ];
    }

}
