<?php

namespace App\Filament\Admin\Resources\DfoodResource\Pages;

use App\Filament\Admin\Resources\DfoodResource;
use Filament\Resources\Pages\EditRecord;

class EditDfood extends EditRecord
{
    protected static string $resource = DfoodResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
