<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Queries;
use App\Filament\Resources\GroupResource\Widgets\Group;
use App\Filament\Resources\PerformerResource\Widgets\Performer;
use Filament\Pages\Page;

class ThirdQuery extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-cube';

    protected static string $view = 'filament.pages.third-query';

    protected static ?string $cluster = Queries::class;

    protected static ?int $navigationSort = 3;

    protected function getFooterWidgets(): array
    {
        return [
            Group::class,
        ];
    }
}
