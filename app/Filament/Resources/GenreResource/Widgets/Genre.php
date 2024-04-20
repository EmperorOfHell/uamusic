<?php

namespace App\Filament\Resources\GenreResource\Widgets;

use App\Filament\Resources\GenreResource;
use App\Models\Song;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Genre extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                GenreResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('album')
                    ->relationship('albums', 'name'),
                SelectFilter::make('song')
                    ->options(
                        fn() => Song::query()->pluck('name', 'name')->all()
                    )
                    ->query(
                        fn(Builder $query, array $data) => !$data['value'] ? '' : $query->whereHas('albums',
                            fn(Builder $query) => $query->whereHas('songs',
                                fn(Builder $query) => $query->where('songs.name', $data))
                        )

                    )


            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('popularity')
                    ->numeric(),
                Tables\Columns\TextColumn::make('albums.name')
                    ->badge()
                    ->wrap(),
                Tables\Columns\TextColumn::make('songs')->state(
                    fn(\App\Models\Genre $genre) => Song::whereHas('albums',
                        function ($query) use ($genre) {
                            $query->WhereHas('group',
                                function ($query) use ($genre) {
                                    $query->whereRelation('genre', 'name', $genre->name);
                                });
                        })->pluck('name')->all()
                )
                    ->badge()
                    ->wrap()

            ]);
    }
}
