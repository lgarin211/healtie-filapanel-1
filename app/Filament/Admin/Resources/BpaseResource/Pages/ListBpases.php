<?php

namespace App\Filament\Admin\Resources\BpaseResource\Pages;

use App\Filament\Admin\Resources\BpaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBpases extends ListRecords
{
    protected static string $resource = BpaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
