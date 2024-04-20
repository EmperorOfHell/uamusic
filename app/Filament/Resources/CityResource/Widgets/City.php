<?php

namespace App\Filament\Resources\CityResource\Widgets;

use App\Filament\Resources\CityResource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
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
            ->filters([
                SelectFilter::make('ticket')
                    ->relationship('tickets', 'ticket_number'),
                SelectFilter::make('country')
                    ->relationship('country', 'name'),

            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('area')
                    ->numeric(),
                Tables\Columns\TextColumn::make('population')
                    ->numeric(),
                Tables\Columns\TextColumn::make('country.name'),
                Tables\Columns\TextColumn::make('tickets.ticket_number')
                    ->badge()
                    ->wrap()

            ]);
    }
}
