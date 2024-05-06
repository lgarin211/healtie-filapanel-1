<?php

namespace App\Filament\Admin\Resources\FoodRResource\Pages;

use App\Filament\Admin\Resources\FoodRResource;
use Filament\Resources\Pages\EditRecord;

class EditFoodR extends EditRecord
{
    protected static string $resource = FoodRResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
