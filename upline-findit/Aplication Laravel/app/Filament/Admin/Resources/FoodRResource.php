<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FoodRResource\Pages;
use App\Models\FoodR;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;

class FoodRResource extends Resource
{
    protected static ?string $modelLabel = 'Data Resep Makanan';
    protected static ?string $model = FoodR::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('poster'), img
                Forms\Components\FileUpload::make('poster')->image(),
                Forms\Components\TextInput::make('target'),
                RichEditor::make('desk'),
                RichEditor::make('nutrisi'),
                Forms\Components\Textarea::make('produk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('poster')->searchable(),
                Tables\Columns\TextColumn::make('target')->searchable(),
                Tables\Columns\TextColumn::make('produk')->searchable(),
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
