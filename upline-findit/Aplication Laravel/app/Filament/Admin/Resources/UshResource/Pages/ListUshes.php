<?php

namespace App\Filament\Admin\Resources\UshResource\Pages;

use App\Filament\Admin\Resources\UshResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUshes extends ListRecords
{
    protected static string $resource = UshResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
