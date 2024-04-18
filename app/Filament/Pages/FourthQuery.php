<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\PerformerResource\Widgets\Performer;
use Filament\Pages\Page;

class FourthQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.fourth-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 4;

    protected function getFooterWidgets(): array
    {
        return [

            Performer::class,
        ];
    }

}
