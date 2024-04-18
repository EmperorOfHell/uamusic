<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\SongResource;
use Filament\Pages\Page;

class FirstQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.first-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 1;



    protected function getFooterWidgets(): array
    {
        return [
           SongResource\Widgets\Song::class,
        ];
    }
}
