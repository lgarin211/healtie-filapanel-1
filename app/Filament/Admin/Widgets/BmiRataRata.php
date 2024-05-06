<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class BmiRataRata extends ChartWidget
{
    protected static ?string $heading = 'Bmi Rata Rata';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
