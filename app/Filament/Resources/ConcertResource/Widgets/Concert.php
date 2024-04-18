<?php

namespace App\Filament\Resources\ConcertResource\Widgets;

use App\Filament\Resources\ConcertResource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Concert extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ConcertResource::getEloquentQuery()
            )
            ->filters([
                SelectFilter::make('tour')
                    ->relationship('tour', 'name'),
                SelectFilter::make('city')
                    ->relationship('city', 'name'),

            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('city_name'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
                Tables\Columns\TextColumn::make('tour_name'),
            ]);
    }
}
