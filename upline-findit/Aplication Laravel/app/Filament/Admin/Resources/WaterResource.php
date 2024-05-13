<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\WaterResource\Pages;
use App\Models\Water;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WaterResource extends Resource
{
    protected static ?string $modelLabel = 'Data Komsos Air Minum';
    protected static ?string $model = Water::class;

    protected static ?string $navigationIcon = 'heroicon-s-rectangle-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ushid'),
                Forms\Components\TextInput::make('targetted')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ushid')->searchable(),

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
            'index' => Pages\ListWaters::route('/'),
            'create' => Pages\CreateWater::route('/create'),
            'edit' => Pages\EditWater::route('/{record}/edit'),
        ];
    }
}
