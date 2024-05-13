<?php

namespace App\Filament\Admin\Resources\TrackpaseResource\Pages;

use App\Filament\Admin\Resources\TrackpaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrackpases extends ListRecords
{
    protected static string $resource = TrackpaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
