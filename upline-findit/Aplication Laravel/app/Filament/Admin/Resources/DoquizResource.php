<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DoquizResource\Pages;
use App\Models\Doquiz;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DoquizResource extends Resource
{
    protected static ?string $modelLabel = 'Data Hasil Quiz ';
    protected static ?string $model = Doquiz::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ushid'),
                Forms\Components\TextInput::make('score'),
                Forms\Components\TextInput::make('desk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ushid')->searchable(),
                Tables\Columns\TextColumn::make('score')->searchable(),
                Tables\Columns\TextColumn::make('desk')->searchable(),
            ])
            ->filters([

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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoquizzes::route('/'),
            'create' => Pages\CreateDoquiz::route('/create'),
            'edit' => Pages\EditDoquiz::route('/{record}/edit'),
        ];
    }
}
