<?php

namespace App\Filament\Resources\SongResource\Widgets;

use App\Filament\Resources\SongResource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Song extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                SongResource::getEloquentQuery()

            )
            ->defaultPaginationPageOption(5)

            ->filters([
                SelectFilter::make('album_name')
                    ->relationship('albums', 'name'),
                SelectFilter::make('language')
                    ->attribute('language')
                    ->options(
                        fn (): array => \App\Models\Song::query()->pluck('language', 'language')->all()
                    )
            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('duration')
                    ->time('i:s'),
                Tables\Columns\TextColumn::make('language'),
                Tables\Columns\TextColumn::make('album_name'),
            ]);
    }
}
