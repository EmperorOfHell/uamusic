<?php

namespace App\Filament\Resources\EducationResource\Widgets;

use App\Filament\Resources\EducationResource;
use App\Models\Concert;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Education extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                EducationResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->filters([
                SelectFilter::make('specialty')
                    ->relationship('specialty', 'name'),
                SelectFilter::make('degree')
                    ->options(
                        fn (): array => \App\Models\Education::query()->pluck('degree', 'degree')->all()
                    )
            ],
                layout: FiltersLayout::AboveContent)
            ->deferFilters()
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
