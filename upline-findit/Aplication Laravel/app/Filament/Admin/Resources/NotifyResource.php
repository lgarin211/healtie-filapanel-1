<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NotifyResource\Pages;
use App\Models\Notify;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NotifyResource extends Resource
{

    protected static ?string $modelLabel = 'Data Notifikasi Pengguna';
    protected static ?string $model = Notify::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul'),
                Forms\Components\TextInput::make('desk'),
                Forms\Components\TextInput::make('ushid'),
                Forms\Components\TextInput::make('from_path'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->searchable(),
                Tables\Columns\TextColumn::make('desk')->searchable(),
                Tables\Columns\TextColumn::make('ushid')->searchable(),
                Tables\Columns\TextColumn::make('from_path')->searchable(),
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
            'index' => Pages\ListNotifies::route('/'),
            'create' => Pages\CreateNotify::route('/create'),
            'edit' => Pages\EditNotify::route('/{record}/edit'),
        ];
    }
}
