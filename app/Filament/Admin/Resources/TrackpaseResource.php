<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TrackpaseResource\Pages;
use App\Models\Trackpase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TrackpaseResource extends Resource
{
    protected static ?string $model = Trackpase::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ushid'),
                Forms\Components\TextInput::make('dfoodid'),
                Forms\Components\TextInput::make('paseline'),
                Forms\Components\TextInput::make('poster'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ushid')->searchable(),
                Tables\Columns\TextColumn::make('dfoodid')->searchable(),
                Tables\Columns\TextColumn::make('paseline')->searchable(),
                Tables\Columns\TextColumn::make('poster')->searchable(),
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
            'index' => Pages\ListTrackpases::route('/'),
            'create' => Pages\CreateTrackpase::route('/create'),
            'edit' => Pages\EditTrackpase::route('/{record}/edit'),
        ];
    }
}
