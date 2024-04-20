<?php

namespace App\Filament\Resources\CountryResource\Widgets;

use App\Filament\Resources\CountryResource;
use App\Models\Group;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Country extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                CountryResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('city')
                    ->relationship('cities', 'name'),
                SelectFilter::make('groups')
                    ->options(
                        fn() => Group::query()->pluck('name', 'name')->all()
                    )
                    ->query(
                        fn(Builder $query, $data) => !$data['value'] ? '' : $query->whereHas('cities',
                            fn(Builder $query) => $query->whereHas('concerts',
                                fn(Builder $query) => $query->whereHas('tour',
                                    fn(Builder $query) => $query->whereRelation('group', 'name', $data)
                                )
                            )
                        )
                    )
            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('continent'),
                Tables\Columns\TextColumn::make('climate'),
                Tables\Columns\TextColumn::make('Groups')
                    ->state(
                        fn(\App\Models\Country $country) => Group::whereHas('tours',
                            fn($query) => $query->whereHas('concerts',
                                fn($query) => $query->whereHas('city',
                                    fn($query) => $query->whereRelation('country', 'name', $country->name)
                                )
                            )
                        )->pluck('name')->all()
                    )
                    ->badge()
                    ->wrap()
                    ->color('success'),
                Tables\Columns\TextColumn::make('cities.name')
                    ->badge()
                    ->wrap()
                    ->color('gray')
            ]);
    }
}
