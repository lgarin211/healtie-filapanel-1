<?php

namespace App\Filament\Admin\Resources\SleepTrackResource\Pages;

use App\Filament\Admin\Resources\SleepTrackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSleepTracks extends ListRecords
{
    protected static string $resource = SleepTrackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
