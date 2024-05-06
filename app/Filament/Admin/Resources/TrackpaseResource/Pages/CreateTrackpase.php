<?php

namespace App\Filament\Admin\Resources\TrackpaseResource\Pages;

use App\Filament\Admin\Resources\TrackpaseResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTrackpase extends CreateRecord
{
    protected static string $resource = TrackpaseResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
