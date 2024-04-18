<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\GenreResource\Widgets\Genre;
use Filament\Pages\Page;

class NinthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.ninth-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 9;

    protected function getFooterWidgets(): array
    {
        return [
            Genre::class,
        ];
    }

}
