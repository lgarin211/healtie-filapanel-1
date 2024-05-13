<?php

namespace App\Filament\Admin\Resources\DfoodResource\Pages;

use App\Filament\Admin\Resources\DfoodResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDfood extends CreateRecord
{
    protected static string $resource = DfoodResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
