<?php

namespace App\Filament\Resources\PerformerResource\Widgets;

use App\Filament\Resources\AlbumResource;
use App\Filament\Resources\PerformerResource;
use App\Models\Song;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Performer extends BaseWidget
{

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table

    {
        return $table
            ->query(
                PerformerResource::getEloquentQuery()

            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('education_number')
                    ->relationship('education', 'diploma_number'),
                SelectFilter::make('song')
                    ->options(
                        fn() => Song::query()->pluck('name', 'name')->all()
                    )->query(
                        fn(Builder $query, $data) => $query->whereHas('group',
                            fn(Builder $query) => !$data['value'] ? '' : $query->whereHas(
                                'songs',
                                fn(Builder $query) => $query->where('songs.name', $data))

                        ))
            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
        ->columns([
                Tables\Columns\TextColumn::make('nickname'),
                Tables\Columns\TextColumn::make('group_name'),
                Tables\Columns\TextColumn::make('role_in_group'),
                Tables\Columns\TextColumn::make('birth_country'),
                Tables\Columns\TextColumn::make('education_number'),
                Tables\Columns\TextColumn::make('songs')->state(
                    fn(\App\Models\Performer $performer) => Song::whereHas('albums', function ($query) use ($performer) {
                        $query->WhereHas('group', function ($query) use ($performer) {
                            $query->whereRelation('performers', 'nickname', $performer->nickname);
                        });
                    })->pluck('name')->all()
                )
                    ->badge()
                    ->wrap()
            ]);
    }
}
