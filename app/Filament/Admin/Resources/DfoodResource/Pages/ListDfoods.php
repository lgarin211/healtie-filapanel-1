<?php

namespace App\Filament\Admin\Resources\DfoodResource\Pages;

use App\Filament\Admin\Resources\DfoodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDfoods extends ListRecords
{
    protected static string $resource = DfoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
