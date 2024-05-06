<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FoodRResource\Pages;
use App\Models\FoodR;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FoodRResource extends Resource
{
    protected static ?string $model = FoodR::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('poster'),
                Forms\Components\TextInput::make('target'),
                Forms\Components\TextInput::make('desk'),
                Forms\Components\TextInput::make('nutrisi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('poster')->searchable(),
                Tables\Columns\TextColumn::make('target')->searchable(),
                Tables\Columns\TextColumn::make('desk')->searchable(),
                Tables\Columns\TextColumn::make('nutrisi')->searchable(),
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
            'index' => Pages\ListFoodRs::route('/'),
            'create' => Pages\CreateFoodR::route('/create'),
            'edit' => Pages\EditFoodR::route('/{record}/edit'),
        ];
    }
}
