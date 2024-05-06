<?php

namespace App\Filament\Admin\Resources\UshResource\Pages;

use App\Filament\Admin\Resources\UshResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUsh extends CreateRecord
{
    protected static string $resource = UshResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
