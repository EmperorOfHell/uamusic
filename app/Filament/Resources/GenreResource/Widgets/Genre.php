<?php

namespace App\Filament\Resources\GenreResource\Widgets;

use App\Filament\Resources\GenreResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Genre extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                GenreResource::getEloquentQuery()
            )
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('popularity')
                    ->numeric(),
            ]);
    }
}
