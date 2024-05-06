<?php

namespace App\Filament\Admin\Resources\BpaseResource\Pages;

use App\Filament\Admin\Resources\BpaseResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBpase extends CreateRecord
{
    protected static string $resource = BpaseResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
