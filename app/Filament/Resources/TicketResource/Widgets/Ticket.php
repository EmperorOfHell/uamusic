<?php

namespace App\Filament\Resources\TicketResource\Widgets;

use App\Filament\Resources\TicketResource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Ticket extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
               TicketResource::getEloquentQuery()
            )
            ->filters([
                SelectFilter::make('service')
                    ->relationship('services', 'name'),
                SelectFilter::make('concert')
                    ->relationship('concert', 'name'),

            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
            ->columns([
                Tables\Columns\TextColumn::make('ticket_number'),
                Tables\Columns\TextColumn::make('concert_name'),
                Tables\Columns\TextColumn::make('seat'),
                Tables\Columns\TextColumn::make('cost')
                    ->money(),
                Tables\Columns\TextColumn::make('services.name')
                    ->badge(),
            ]);
    }
}
