<?php

namespace App\Filament\Admin\Resources\DoquizResource\Pages;

use App\Filament\Admin\Resources\DoquizResource;
use Filament\Resources\Pages\EditRecord;

class EditDoquiz extends EditRecord
{
    protected static string $resource = DoquizResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
