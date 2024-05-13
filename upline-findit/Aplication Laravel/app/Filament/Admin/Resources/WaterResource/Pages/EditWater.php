<?php

namespace App\Filament\Admin\Resources\WaterResource\Pages;

use App\Filament\Admin\Resources\WaterResource;
use Filament\Resources\Pages\EditRecord;

class EditWater extends EditRecord
{
    protected static string $resource = WaterResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
