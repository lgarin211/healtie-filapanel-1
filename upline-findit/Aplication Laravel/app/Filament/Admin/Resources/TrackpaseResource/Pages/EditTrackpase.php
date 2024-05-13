<?php

namespace App\Filament\Admin\Resources\TrackpaseResource\Pages;

use App\Filament\Admin\Resources\TrackpaseResource;
use Filament\Resources\Pages\EditRecord;

class EditTrackpase extends EditRecord
{
    protected static string $resource = TrackpaseResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
