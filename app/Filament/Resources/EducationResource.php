<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('diploma_number')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('specialty_number')
                    ->relationship('specialty', 'name')
                    ->required(),
                Forms\Components\Select::make('degree')
                    ->options([
                        'Бакалавр' => 'Бакалавр' ,
                        'Магістр' => 'Магістр',
                        'Доктор філософії' => 'Доктор філософії',
                        'Доктор наук' => 'Доктор наук',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('graduation_year')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('institution_name')
                    ->relationship('institution', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('diploma_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('degree')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specialty.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specialty_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('institution_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('graduation_year')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
