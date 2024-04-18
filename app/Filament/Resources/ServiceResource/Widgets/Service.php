<?php

namespace App\Filament\Resources\ServiceResource\Widgets;

use App\Filament\Resources\ServiceResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Service extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ServiceResource::getEloquentQuery()
            )
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('cost')
                    ->money(),
            ]);
    }
}
