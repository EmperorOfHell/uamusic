<?php

namespace App\Filament\Resources\CityResource\Widgets;

use App\Filament\Resources\CityResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class City extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                CityResource::getEloquentQuery()
            )
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('area')
                    ->numeric(),
                Tables\Columns\TextColumn::make('population')
                    ->numeric(),
                Tables\Columns\TextColumn::make('country_name'),
            ]);
    }
}
