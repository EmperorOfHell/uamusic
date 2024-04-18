<?php

namespace App\Filament\Resources\PerformerResource\Pages;

use App\Filament\Resources\PerformerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerformers extends ListRecords
{
    protected static string $resource = PerformerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
