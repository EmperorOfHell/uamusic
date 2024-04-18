<?php

namespace App\Filament\Resources\TourResource\Widgets;

use App\Filament\Resources\TourResource;
use App\Models\Song;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Tour extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                TourResource::getEloquentQuery(),
            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('merch')
                    ->relationship('merch', 'name'),
                SelectFilter::make('group')
                    ->relationship('group', 'name'),

            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('group_name'),
                Tables\Columns\TextColumn::make('start_date')
                    ->date(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date(),
                Tables\Columns\TextColumn::make('merch.name')
                    ->badge(),

            ]);
    }
}
