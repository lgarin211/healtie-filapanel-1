<?php

namespace App\Filament\Admin\Resources\DoquizResource\Pages;

use App\Filament\Admin\Resources\DoquizResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoquizzes extends ListRecords
{
    protected static string $resource = DoquizResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
