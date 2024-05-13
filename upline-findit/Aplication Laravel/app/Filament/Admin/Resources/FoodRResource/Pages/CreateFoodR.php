<?php

namespace App\Filament\Admin\Resources\FoodRResource\Pages;

use App\Filament\Admin\Resources\FoodRResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFoodR extends CreateRecord
{
    protected static string $resource = FoodRResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
