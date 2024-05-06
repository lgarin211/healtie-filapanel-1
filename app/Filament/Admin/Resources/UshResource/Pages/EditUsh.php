<?php

namespace App\Filament\Admin\Resources\UshResource\Pages;

use App\Filament\Admin\Resources\UshResource;
use Filament\Resources\Pages\EditRecord;

class EditUsh extends EditRecord
{
    protected static string $resource = UshResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
