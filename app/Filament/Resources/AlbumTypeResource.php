<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlbumTypeResource\Pages;
use App\Filament\Resources\AlbumTypeResource\RelationManagers;
use App\Models\AlbumType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlbumTypeResource extends Resource
{
    protected static ?string $model = AlbumType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->name('name')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('num_of_songs')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('num_of_songs')
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
            'index' => Pages\ListAlbumTypes::route('/'),
            'create' => Pages\CreateAlbumType::route('/create'),
            'edit' => Pages\EditAlbumType::route('/{record}/edit'),
        ];
    }
}
