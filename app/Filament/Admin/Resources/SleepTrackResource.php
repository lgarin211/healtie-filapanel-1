<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SleepTrackResource\Pages;
use App\Models\SleepTrack;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SleepTrackResource extends Resource
{
    protected static ?string $model = SleepTrack::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal'),
                Forms\Components\TimePicker::make('start'),
                Forms\Components\TimePicker::make('wake'),
                Forms\Components\TextInput::make('esensi'),
                Forms\Components\TextInput::make('deskpoin'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('esensi')->searchable(),
                Tables\Columns\TextColumn::make('deskpoin')->searchable(),
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
            'index' => Pages\ListSleepTracks::route('/'),
            'create' => Pages\CreateSleepTrack::route('/create'),
            'edit' => Pages\EditSleepTrack::route('/{record}/edit'),
        ];
    }
}
