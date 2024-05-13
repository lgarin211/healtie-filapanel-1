<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BpaseResource\Pages;
use App\Models\Bpase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BpaseResource extends Resource
{

    protected static ?string $modelLabel = 'Rekam Medis BPASE';
    protected static ?string $model = Bpase::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('height')->numeric(),
                Forms\Components\TextInput::make('weight')->numeric(),
                // Forms\Components\TextInput::make('bmi'), over,normal,under
                Forms\Components\Select::make('bmi')->options([
                    'Overweight' => 'Overweight',
                    'Normal' => 'Normal',
                    'Underweight' => 'Underweight',
                ]),
                // Forms\Components\TextInput::make('goals'), select
                Forms\Components\Select::make('goals')->options([
                    'Kurangi Berat Badan' => 'Kurangi Berat Badan',
                    'Tetapkan Berat Badan' => 'Tetapkan Berat Badan',
                    'Tingkatkan Berat Badan' => 'Tingkatkan Berat Badan',
                ]),
                Forms\Components\DateTimePicker::make('periode')->time(false),
                Forms\Components\TextInput::make('ushid')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('height')->searchable(),
                Tables\Columns\TextColumn::make('weight')->searchable(),
                Tables\Columns\TextColumn::make('bmi')->searchable(),
                Tables\Columns\TextColumn::make('goals')->searchable(),

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
            'index' => Pages\ListBpases::route('/'),
            'create' => Pages\CreateBpase::route('/create'),
            'edit' => Pages\EditBpase::route('/{record}/edit'),
        ];
    }
}
