<?php

namespace App\Filament\Resources\PerformerResource\Pages;

use App\Filament\Resources\PerformerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerformer extends EditRecord
{
    protected static string $resource = PerformerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
