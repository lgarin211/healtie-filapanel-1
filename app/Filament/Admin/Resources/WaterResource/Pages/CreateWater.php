<?php

namespace App\Filament\Admin\Resources\WaterResource\Pages;

use App\Filament\Admin\Resources\WaterResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWater extends CreateRecord
{
    protected static string $resource = WaterResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
