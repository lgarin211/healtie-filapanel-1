<?php

namespace App\Filament\Admin\Resources\NotifyResource\Pages;

use App\Filament\Admin\Resources\NotifyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNotify extends CreateRecord
{
    protected static string $resource = NotifyResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
