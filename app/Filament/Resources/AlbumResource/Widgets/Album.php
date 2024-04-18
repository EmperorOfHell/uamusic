<?php

namespace App\Filament\Resources\AlbumResource\Widgets;

use App\Filament\Resources\AlbumResource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Album extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                AlbumResource::getEloquentQuery()

            )
            ->defaultPaginationPageOption(5)

            ->filters([
                SelectFilter::make('group_name')
                    ->relationship('group', 'name'),
                SelectFilter::make('num_of_songs')
                    ->attribute('num_of_songs')
                    ->options(
                        fn (): array => \App\Models\Album::query()->pluck('num_of_songs', 'num_of_songs')->all()
                    )
            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('release_date')
                    ->date(),
                Tables\Columns\TextColumn::make('num_of_songs')
                    ->numeric(),
                Tables\Columns\TextColumn::make('group_name'),
            ]);
    }
}
