<?php

namespace App\Filament\Admin\Resources\SleepTrackResource\Pages;

use App\Filament\Admin\Resources\SleepTrackResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSleepTrack extends CreateRecord
{
    protected static string $resource = SleepTrackResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
