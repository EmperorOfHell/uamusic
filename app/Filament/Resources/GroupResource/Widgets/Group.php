<?php

namespace App\Filament\Resources\GroupResource\Widgets;

use App\Filament\Resources\GroupResource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Group extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table

    {
        return $table
            ->query(
                GroupResource::getEloquentQuery()

            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('genres')
                    ->relationship('genre', 'name'),
                SelectFilter::make('performers')
                        ->relationship('performers', 'nickname'),
            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('founded_date')
                    ->date(),
                Tables\Columns\TextColumn::make('num_members')
                    ->numeric(),
                Tables\Columns\TextColumn::make('genre_name'),
                Tables\Columns\TextColumn::make('performers.nickname')
                    ->badge()
                    ->sortable(),
            ]);
    }
}
