<?php

namespace App\Filament\Resources\MerchandiseResource;

use App\Filament\Resources\MerchandiseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Merchandise extends BaseWidget
{
    public int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                MerchandiseResource::getEloquentQuery()
            )
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('tour_name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('cost')
                    ->money()
            ]);
    }
}
