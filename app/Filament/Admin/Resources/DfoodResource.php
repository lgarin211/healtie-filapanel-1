<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DfoodResource\Pages;
use App\Models\Dfood;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DfoodResource extends Resource
{
    protected static ?string $model = Dfood::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('barcode')->required()->label('Barcode'),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('natrium')->numeric(),
                Forms\Components\TextInput::make('fat')->numeric(),
                Forms\Components\TextInput::make('sugar')->numeric(),
                Forms\Components\TextInput::make('kcal')->numeric(),
                Forms\Components\TextInput::make('poster'),
                Forms\Components\TextInput::make('etc'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('barcode')->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('poster')->searchable(),
                Tables\Columns\TextColumn::make('etc')->searchable(),
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
            'index' => Pages\ListDfoods::route('/'),
            'create' => Pages\CreateDfood::route('/create'),
            'edit' => Pages\EditDfood::route('/{record}/edit'),
        ];
    }
}
