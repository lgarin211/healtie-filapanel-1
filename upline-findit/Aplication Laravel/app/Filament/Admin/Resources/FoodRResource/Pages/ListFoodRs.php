<?php

namespace App\Filament\Admin\Resources\FoodRResource\Pages;

use App\Filament\Admin\Resources\FoodRResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFoodRs extends ListRecords
{
    protected static string $resource = FoodRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
