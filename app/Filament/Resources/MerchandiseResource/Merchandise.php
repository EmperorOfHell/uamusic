<?php

namespace App\Filament\Resources\MerchandiseResource;

use App\Filament\Resources\MerchandiseResource;
use App\Models\Group;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Merchandise extends BaseWidget
{
    public int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                MerchandiseResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('tour')
                    ->relationship('tour', 'name'),
                SelectFilter::make('group')
                    ->options(
                        Group::query()->pluck('name', 'name')->all()
                    )
                    ->query(
                        fn(Builder $query, $data) => !$data['value'] ? '' : $query->whereHas('tour',
                            fn(Builder $query) => $query->whereRelation('group', 'name', $data)
                        )
                    )

            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('tour_name')->label('Tour'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('cost')
                    ->money(),
                Tables\Columns\TextColumn::make('Group')
                    ->state(
                        fn(\App\Models\Merchandise $merch) => Group::whereHas('tours',
                            fn(Builder $query) => $query->whereRelation('merch', 'name', $merch->name)
                        )->pluck('name')->all()
                    ),
            ]);
    }
}
