<?php

namespace App\Filament\Resources\EducationResource\Widgets;

use App\Filament\Resources\EducationResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Education extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                EducationResource::getEloquentQuery()
            )
            ->columns([
                Tables\Columns\TextColumn::make('diploma_number')
                    ->numeric(),
                Tables\Columns\TextColumn::make('degree'),
                Tables\Columns\TextColumn::make('specialty.name'),
                Tables\Columns\TextColumn::make('specialty_number'),
                Tables\Columns\TextColumn::make('institution_name'),
                Tables\Columns\TextColumn::make('graduation_year')
                    ->numeric(),
            ]);
    }
}
