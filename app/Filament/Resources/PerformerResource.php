<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerformerResource\Pages;
use App\Filament\Resources\PerformerResource\RelationManagers;
use App\Models\Education;
use App\Models\Performer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerformerResource extends Resource
{
    protected static ?string $model = Performer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = \App\Filament\Clusters\Artists::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nickname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('group_name')
                    ->relationship('group', 'name')
                    ->required(),
                Forms\Components\TextInput::make('role_in_group')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('birth_country')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('education')
                    ->relationship('education', 'diploma_number')
                    ->getOptionLabelFromRecordUsing(fn(Education $record) => "{$record->diploma_number} {$record->degree} {$record->specialty->name}"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nickname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('group_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role_in_group')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('education_number')
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
            'index' => Pages\ListPerformers::route('/'),
            'create' => Pages\CreatePerformer::route('/create'),
            'edit' => Pages\EditPerformer::route('/{record}/edit'),
        ];
    }
}
