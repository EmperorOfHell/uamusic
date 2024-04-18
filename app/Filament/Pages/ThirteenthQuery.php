<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\EducationResource\Widgets\Education;
use Filament\Pages\Page;

class ThirteenthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.thirteenth-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 13;

    protected function getFooterWidgets(): array
    {
        return [
            Education::class,
        ];
    }

}
