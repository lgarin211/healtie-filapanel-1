<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class Quizpoin extends ChartWidget
{
    protected static ?string $heading = 'Quizpoin';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'radar';
    }
}
