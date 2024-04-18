<?php

namespace App\Filament\Resources\CountryResource\Widgets;

use App\Filament\Resources\CountryResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Country extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                CountryResource::getEloquentQuery()
            )
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('continent'),
                Tables\Columns\TextColumn::make('climate'),
            ]);
    }
}
