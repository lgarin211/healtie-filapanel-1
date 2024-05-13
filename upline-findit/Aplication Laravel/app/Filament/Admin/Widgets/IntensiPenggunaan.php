<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class IntensiPenggunaan extends ChartWidget
{
    protected static ?string $heading = 'Intensi Penggunaan';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
