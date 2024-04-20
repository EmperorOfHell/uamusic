<?php

namespace App\Filament\Resources\ServiceResource\Widgets;

use App\Filament\Resources\ServiceResource;
use App\Models\Concert;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Service extends BaseWidget
{

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ServiceResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('ticket')
                    ->relationship('tickets', 'ticket_number'),
                SelectFilter::make('concert')
                    ->options(
                        Concert::query()->pluck('name', 'name')->all()
                    )
                    ->query(
                        fn(Builder $query, $data) => !$data['value'] ? '' : $query->whereHas('tickets',
                            fn(Builder $query) => $query->whereRelation('concert', 'name', $data)
                        )
                    )

            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('cost')
                    ->money(),
                Tables\Columns\TextColumn::make('tickets.ticket_number')
                    ->badge()
                    ->color('success'),
                Tables\Columns\TextColumn::make('Concert')
                    ->state(
                        fn(\App\Models\Service $serv) => Concert::whereHas('tickets',
                            fn(Builder $query) => $query->whereRelation('services', 'name', $serv->name)
                        )->pluck('name')->all()
                    )
                    ->badge()
                    ->color('gray'),
            ]);
    }
}
