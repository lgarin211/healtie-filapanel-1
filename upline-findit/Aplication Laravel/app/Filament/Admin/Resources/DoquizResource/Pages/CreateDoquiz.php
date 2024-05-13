<?php

namespace App\Filament\Admin\Resources\DoquizResource\Pages;

use App\Filament\Admin\Resources\DoquizResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDoquiz extends CreateRecord
{
    protected static string $resource = DoquizResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
